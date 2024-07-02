<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\absensiModel;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class absenController extends Controller
{
    public function actionAbsenMasuk()
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

    public function absenpulang($id){
        return dd($id);
        return view('absenpulang');
    }

    public function absenpulangAction(Request $request){
       ;
    }
    public function izinAction(Request $request){
       return view('izin')  ;
    }
}
