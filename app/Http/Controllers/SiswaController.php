<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(){

        $data = Siswa::all();
        return view('datasiswa',compact('data'));
    }

    public function tambahsiswa(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        Siswa::create($request->all());
        return redirect()->route('siswa');
    }

    public function tampilkandata($id){

        $data = Siswa::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){

        $data = Siswa::find($id);
        $data->update($request->all());

        return redirect()->route('siswa');
    }

    public function delete($id){

        $data = Siswa::find($id);
        $data->delete();

        return redirect()->route('siswa');
    }
}
