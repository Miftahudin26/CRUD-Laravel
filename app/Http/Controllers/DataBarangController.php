<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    public function index(){

        $data = DataBarang::all();
        return view('databarang', compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }

    // request = di tampilan view/form akan tampil di /tambahbarang
    public function insertdata(Request $request){
        DataBarang::create($request->all());
        return redirect()->route('dataBarang')->with('success', 'Data Berhasil di Tambahkan');
    }

    // ambil, data dari parameter /databarang (tampilkandata)
    public function tampilkandata($id){
        $data = DataBarang::find($id);
        // dd($data);
        return view('tampildata', compact('data'));
    }

    // mengupdate semua request yang masuk
    public function updatedata(Request $request, $id){
        $data = DataBarang::find($id);
        $data->update($request->all());
        return redirect()->route('dataBarang')->with('success', 'Data Berhasil di Update');
    }

    public function deletedata($id){
        $data = DataBarang::find($id);
        $data->delete();
        return redirect()->route('dataBarang')->with('success', 'Data Berhasil di Hapus');

    }
}
