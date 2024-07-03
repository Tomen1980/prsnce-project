<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\absensiModel;
use App\Models\LaporanModel;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

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
        if($request->status == "izin"){
            $absen->save();
            return redirect('/absenpulang/'.$absen->id);
        }
        $absen->absenMasuk = $currentTime;
        $absen->save();
        return redirect('/dashboard');
    }

    public function absenpulang(string $id){
       

        return view('absenpulang',['idAbsen' => $id]);
    }

    public function actionAbsenPulang(Request $request){
        $validation = $request->validate([
            "deskripsi" => "required|min:10"
        ]);

        $laporan = LaporanModel::create([
            "id_absen" => $request->id,
            "deskripsi" => $request->deskripsi
        ]);

        if($laporan){
            return redirect('/dashboard')->with('success', 'successfully Signing Out');
        }else{
            return redirect('/absenpulang/'.$request->idAbsen)->with('error', 'Signing Out Failed');
        }
    }

    public function absenpulangAction(Request $request){
       ;
    }
    public function izinAction(Request $request){
       return view('izin')  ;
    }
    public function riwayatPresensi(){
        return view('riwayatpresensi');
    }
}
