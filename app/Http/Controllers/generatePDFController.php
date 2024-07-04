<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class generatePDFController extends Controller
{
    public function generatePdf()
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
            ->latest('absensi.tanggal') // Mengambil data dengan tanggal terbaru
            ->get();

        // return dd($absenData);

        // $users = User::all();
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
