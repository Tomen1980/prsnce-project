<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class generatePDFController extends Controller
{
    public function generatePdf(string $id)
    {
        $absenData = DB::table('absensi')
            ->leftJoin('izin', 'absensi.id', '=', 'izin.id_absen')
            ->leftJoin('laporan', 'absensi.id', '=', 'laporan.id_absen')
            ->select(
                'absensi.tanggal','absensi.absenMasuk','absensi.absenPulang',
                DB::raw('
                    CASE
                        WHEN laporan.id IS NOT NULL THEN "Hadir"
                        WHEN izin.id IS NOT NULL THEN "Izin"
                        ELSE "Alfa"
                    END AS status
                '),
                DB::raw('COALESCE(izin.keterangan, laporan.deskripsi, "Tidak ada keterangan") AS keterangan'),
            )
            ->where('absensi.id_user', $id)
            ->latest('absensi.tanggal') // Mengambil data dengan tanggal terbaru
            ->get();

        // return dd($absenData);

        // $users = User::all();
        if($id !== Auth::user()->id){
            $nama = User::where('id', $id)->value('name');
        }else{
            $nama = Auth::user()->name;
        }
        // return dd($nama);
        $data = [
            'title' => 'Report Magang',
            'date' => date('m/d/Y'),
            'users' => Auth::user()->name,
            'absenData' => $absenData,
        ];

        $pdf = Pdf::loadView('myPDF', $data);
        return $pdf->download('Prsnce Magang.pdf');
        // return Pdf::loadFile(public_path().'/myPDF.blade.php')->save('/path-to/my_stored_file.pdf')->stream('download.pdf');
    }
}
