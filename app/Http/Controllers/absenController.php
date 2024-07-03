<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\absensiModel;
use App\Models\LaporanModel;
use App\Models\izinModel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class absenController extends Controller
{
    public function actionAbsenMasuk(Request $request)
    {
        // Mendapatkan tanggal saat ini
        $currentDate = Carbon::now()->format('Y-m-d');

        // Mendapatkan waktu saat ini (jam, menit, detik)
        $currentTime = Carbon::now()->format('H:i:s');

        $user = Auth::user();
        $absen = new absensiModel();
        $absen->id_user = $user->id;
        $absen->tanggal = $currentDate;

        $absen->absenMasuk = $currentTime;
        $absen->save();
        return redirect('/dashboard');
    }

    public function absenpulang(string $id)
    {
        return view('absenpulang', ['idAbsen' => $id]);
    }

    public function actionAbsenPulang(Request $request)
    {
        $validation = $request->validate([
            'deskripsi' => 'required|min:10',
        ]);
        // return dd($request->all());
        $absen = absensiModel::find($request->id)->update([
            'absenPulang' => Carbon::now()->format('H:i:s'),
        ]);
        // return $absen;
        $laporan = LaporanModel::create([
            'id_absen' => $request->id,
            'deskripsi' => $request->deskripsi,
        ]);

        if ($laporan) {
            return redirect('/dashboard')->with('success', 'successfully Signing Out');
        } else {
            return redirect('/absenpulang/' . $request->id)->with('error', 'Signing Out Failed');
        }
    }

    public function formIzin()
    {
        return view('formIzin');
    }

    public function actionIzin(Request $request)
    {
        //  return dd($request->all());
        $validation = $request->validate([
            'deskripsi' => 'required|min:10',
            'tipePerizinan' => 'required',
        ]);

        if ($request->tipePerizinan == null) {
            return back()->with('error', 'Tipe Perizinan harus dipilih');
        }

        // Ambil tanggal skrng
        $currentDate = Carbon::now()->format('Y-m-d');

        // Membuat absen kode
        $absen = new absensiModel();
        $absen->id_user = Auth::user()->id;
        $absen->tanggal = $currentDate;
        $absen->save();

        $izin = izinModel::create([
            'id_absen' => $absen->id,
            'keterangan' => $request->deskripsi,
            'tipe' => $request->tipePerizinan,
        ]);
        if ($izin) {
            return redirect('/dashboard')->with('success', 'You Have Successfully Permitted');
        } else {
            return redirect('/formIzin')->with('error', 'You Failed Permission');
        }
    }

    public function Monitor()
    {
        $data = DB::table('users')->leftJoin('absensi', 'users.id', '=', 'absensi.id_user')->leftJoin('laporan', 'absensi.id', '=', 'laporan.id_absen')->leftJoin('izin', 'absensi.id', '=', 'izin.id_absen')->select('users.name', 'users.image', DB::raw('COUNT(DISTINCT laporan.id_absen) as total_hadir'), DB::raw('COUNT(DISTINCT CASE WHEN laporan.id_absen IS NULL AND izin.id_absen IS NULL THEN absensi.id ELSE NULL END) as total_alfa'), DB::raw('COUNT(DISTINCT izin.id_absen) as total_izin'), DB::raw('COUNT(DISTINCT laporan.id_absen) + COUNT(DISTINCT CASE WHEN laporan.id_absen IS NULL AND izin.id_absen IS NULL THEN absensi.id ELSE NULL END) + COUNT(DISTINCT izin.id_absen) as total_kehadiran'))->where('users.role', 'intern')->groupBy('users.name', 'users.image')->get();

        // return dd([
        //     'totalHadir' => $totalHadir,
        //     // 'totalAlfa' => $totalAlfa,
        //     // 'totalIzin' => $totalIzin
        // ]);

        return view('monitor', compact('data'));
    }

    public function searchMonitor(Request $request)
    {
        $search = $request->input('search');
        $query = DB::table('users')->leftJoin('absensi', 'users.id', '=', 'absensi.id_user')->leftJoin('laporan', 'absensi.id', '=', 'laporan.id_absen')->leftJoin('izin', 'absensi.id', '=', 'izin.id_absen')->select('users.name', 'users.image', DB::raw('COUNT(DISTINCT laporan.id_absen) as total_hadir'), DB::raw('COUNT(DISTINCT CASE WHEN laporan.id_absen IS NULL AND izin.id_absen IS NULL THEN absensi.id ELSE NULL END) as total_alfa'), DB::raw('COUNT(DISTINCT izin.id_absen) as total_izin'), DB::raw('COUNT(DISTINCT laporan.id_absen) + COUNT(DISTINCT CASE WHEN laporan.id_absen IS NULL AND izin.id_absen IS NULL THEN absensi.id ELSE NULL END) + COUNT(DISTINCT izin.id_absen) as total_kehadiran'))->where('users.role', 'intern')->groupBy('users.name', 'users.image');

        if (!empty($search)) {
            $query->where('users.name', 'like', '%' . $search . '%');
        }

        $data = $query->paginate(16);

        if ($request->ajax()) {
            return view('partial.listMonitor', compact('data'))->render();
        }

        return view('monitor', compact('data', 'search'));
    }

    public function riwayatPresensi()
    {
        $absenData = DB::table('absensi')
            ->leftJoin('izin', 'absensi.id', '=', 'izin.id_absen')
            ->leftJoin('laporan', 'absensi.id', '=', 'laporan.id_absen')
            ->select(
                'absensi.tanggal',
                DB::raw('
                    CASE
                        WHEN laporan.id IS NOT NULL THEN "Hadir"
                        WHEN izin.id IS NOT NULL THEN "Izin"
                        ELSE "Alfa"
                    END AS status
                '),
                DB::raw('COALESCE(izin.keterangan, laporan.deskripsi, "Tidak ada keterangan") AS keterangan'),
            )
            ->where('absensi.id_user', Auth::user()->id)
            ->latest('absensi.tanggal')
            ->get();

        // return dd($absenData);

        return view('riwayatPresensi',[
            'absenData' => $absenData
        ]);
    }
    public function searchRiwayat(Request $request) {
        $search = $request->input('search');

        $query = DB::table('absensi')
            ->leftJoin('izin', 'absensi.id', '=', 'izin.id_absen')
            ->leftJoin('laporan', 'absensi.id', '=', 'laporan.id_absen')
            ->select(
                'absensi.tanggal',
                DB::raw('
                    CASE
                        WHEN laporan.id IS NOT NULL THEN "Hadir"
                        WHEN izin.id IS NOT NULL THEN "Izin"
                        ELSE "Alfa"
                    END AS status
                '),
                DB::raw('COALESCE(izin.keterangan, laporan.deskripsi, "Tidak ada keterangan") AS keterangan'),
            )
            ->where('absensi.id_user', Auth::user()->id)
            ->where(function ($query) use ($search) {
                $query->where('absensi.tanggal', 'like', '%' . $search . '%');
            })
            ->orderBy('absensi.tanggal');

        $absenData = $query->paginate(10);

        if ($request->ajax()) {
            return view('partial.listRiwayatPresensi', compact('absenData'))->render();
        }

        return view('riwayatPresensi', compact('absenData', 'search'));
    }
}
