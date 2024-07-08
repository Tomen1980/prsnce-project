<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\internTypeModel;
use App\Models\unitTypeModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = DB::table('users')
            ->leftJoin('interntype', 'users.id_intern', '=', 'interntype.id')
            ->leftJoin('unittype', 'users.id_unit', '=', 'unittype.id')
            ->select('users.*', 'interntype.pesertaKP', 'unittype.unitType')
            ->where('users.role', '=', 'intern')
            ->paginate(5);

        return view('indexPeserta', compact('user'));
    }

    public function searchPeserta(Request $request)
    {
        $search = $request->input('search');
        $query = User::query();

        if (!empty($search)) {
            $query->leftJoin('interntype', 'users.id_intern', '=', 'interntype.id')
            ->leftJoin('unittype', 'users.id_unit', '=', 'unittype.id')
            ->select('users.*', 'interntype.pesertaKP', 'unittype.unitType')
            ->where('users.role', '=', 'intern')
            ->where('users.name', 'like', '%' . $search . '%')
            ->paginate(5);
        }else{
            $query->leftJoin('interntype', 'users.id_intern', '=', 'interntype.id')
            ->leftJoin('unittype', 'users.id_unit', '=', 'unittype.id')
            ->select('users.*', 'interntype.pesertaKP', 'unittype.unitType')
            ->where('users.role', '=', 'intern')
            ->paginate(5);
        }

        $user = $query->paginate(10);

        if ($request->ajax()) {
            return view('partial.listPeserta', compact('user'))->render();
        }

        return view('indexPeserta', compact('user', 'search'));
    }

    public function create()
    {
        $type = internTypeModel::all();
        $unit = unitTypeModel::all();
        return view('formPeserta',[
            'action' => 'store',
            'type' => $type,
            'unit' => $unit
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'name' => 'required|min:3|max:255',
            'instansi' => 'required|min:3|max:255',
            'nip' => 'required|min:5|max:255',
            'tipePeserta' => 'required',
            'tipeUnit' => 'required',
            'email' => 'required|email|unique:users',
            'noTelp' => 'required|min:5|max:255',
            'mentor' => 'required|min:5|max:255',
            'password' => 'required|min:8',
            'passwordVerify' => 'required|same:password',
        ]);

        // return dd($request->all());
        

        // return dd($request->all());
        $validasiEmail = User::where('email', $validasi['email'])->exists();
        if($validasiEmail){
            return back()->with('error', 'email already exists');
        }
        $validasiNip = User::where('id', $validasi['nip'])->exists();
        if($validasiNip){
            return back()->with('error', 'nip already exists');
        }
        if($validasi["password"] !== $validasi["passwordVerify"]){
            return back()->with('error', 'password not match');
        }
        if($validasi["tipePeserta"] == null){
            return back()->with('error', 'tipe peserta not selected');
        }
        if($validasi["tipeUnit"] == null){
            return back()->with('error', 'tipe unit not selected');
        }
      

        $data = User::create([
            'id' => $validasi['nip'],
            'name' => $validasi['name'],
            'instansi' => $validasi['instansi'],
            'id_intern' => $validasi['tipePeserta'],
            'id_unit' => $validasi['tipeUnit'],
            'email' => $validasi['email'],
            'password' => Hash::make($validasi['password']),
            'noTelp' => $validasi['noTelp'],
            'mentor' => $validasi['mentor']
        ]);

        if($data){
            return redirect('/listPeserta')->with('success', 'data added successfully');
        }else{
            return back()->with('error', 'data not added');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = User::where('id', $id)->first();
        if($data){
        return view('formPeserta',[
            'action' => 'update',
            'data' => $data,
            'type' => internTypeModel::all(),
            'unit' => unitTypeModel::all()
        ]);
    }else{
        return back()->with('error', 'data not found');
    }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate([
            'name' => 'required|min:3|max:255',
            'instansi' => 'required|min:3|max:255',
            'nip' => 'required|min:5|max:255',
            'tipePeserta' => 'required',
            'tipeUnit' => 'required',
            'email' => 'required|email',
            'noTelp' => 'required|min:5|max:255',
            'mentor' => 'required|min:5|max:255',
            'password' => 'required|min:8',
            'passwordVerify' => 'required|same:password',
        ]);

        $verifAccount = User::where('id', $id)->select('email','id')->first();
        if($validasi["email"] !== $verifAccount->email){
            $validasiEmail = User::where('email', $validasi['email'])->exists();
            if($validasiEmail){
                return back()->with('error', 'email already exists');
            }
        }
        // CEK NIP
        if($validasi["nip"] == $verifAccount->id){
            $nipValid = $verifAccount->id;
        }else{
            $nipValid = User::where('id', $validasi['nip'])->exists();
             if($nipValid){
                 return back()->with('error', 'nip already exists');    
            }else{
                $nipValid = $validasi['nip'];
            }
        }

        if($validasi["password"] !== $validasi["passwordVerify"]){
            return back()->with('error', 'password not match');
        }

        if($validasi["tipePeserta"] == Null){
            return back()->with('error', 'tipe peserta not selected');
        }
        if($validasi["tipeUnit"] == Null){
            return back()->with('error', 'tipe unit not selected');
        }

        $data = User::where('id', $id)->update([
            'id' => $nipValid,
            'name' => $validasi['name'],
            'instansi' => $validasi['instansi'],
            'id_intern' => $validasi['tipePeserta'],
            'id_unit' => $validasi['tipeUnit'],
            'email' => $validasi['email'],
            'password' => Hash::make($validasi['password']),
            'noTelp' => $validasi['noTelp'],
            'mentor' => $validasi['mentor']
        ]);
        if($data){
            return redirect('/listPeserta')->with('success', 'data updated successfully');
        }else{
            return back()->with('error', 'data not updated');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,string $id)
    {
        $data = User::where('id', $id)->delete();
        if($data){
            return redirect('/listPeserta')->with('success', 'data deleted successfully');
        }else{
            return back()->with('error', 'data not deleted');
        }
    }
}
