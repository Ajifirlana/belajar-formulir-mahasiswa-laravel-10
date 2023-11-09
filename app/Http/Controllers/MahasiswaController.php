<?php

namespace App\Http\Controllers;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

use Illuminate\Http\Request;
class MahasiswaController extends Controller
{
    public function tampilkanFormulir()
    {
        return view('formulir');
        
    }

    
    public function simpan_formulir(Request $request)
    {
             $nama = $request->input('nama');
             $nim = $request->input('nim');
             $alamat = $request->input('alamat');
             $jenis_kelamin = $request->input('jenis_kelamin');
             $hobi = $request->input('hobi');
             $jurusan = $request->input('jurusan');
             $email = $request->input('email');
             $tgl_lahir = $request->input('tgl_lahir');
             $telepon = $request->input('telepon');
             $website = $request->input('website');
             $warna_favorit = $request->input('warna_favorit');
             $bekerja = $request->input('bekerja');
             $universitas = $request->input('universitas');
               
        return view('hasil_formulir', array("nama"=>$nama,
        "nim"=>$nim,
        'alamat'=>$alamat,
        'jenis_kelamin'=>$jenis_kelamin,
        'hobi'=>$hobi,
        'jurusan'=>$jurusan,
        'email'=>$email,
        'tgl_lahir'=>$tgl_lahir,
        'telepon'=>$telepon,
        'website'=>$website,
        'warna_favorit'=>$warna_favorit,
        'bekerja'=>$bekerja,
        'universitas'=>$universitas));
    }
}