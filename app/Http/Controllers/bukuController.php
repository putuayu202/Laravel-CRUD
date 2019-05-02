<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\buku;

use DB;
class bukuController extends Controller
{
    public function index(){
     $hasil = buku::all();

     return view('dashboar',['data'=>$hasil]);
	}

	 public function create()
    {
        return view('daftar');
    }

     public function store(Request $request)
    {
    DB::table('buku')->insert([
        'judul' => $request->judul,
        'penerbit' => $request->penerbit,
        'tahun_terbit' => $request->tahun_terbit,
        'pengarang' => $request->pengarang
    ]);
    return redirect('/');    }


     public function edit($id)
    {
        $buku = DB::table('buku')->where('id',$id)->get();
        // passing data buku yang didapat ke view edit.blade.php
        return view('edit',['buku' => $buku]);
    }

     public function update(Request $request)
    {
        // update data pegawai
        DB::table('buku')->where('id',$request->id)->update([
            'judul' => $request->judul,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'pengarang' => $request->pengarang
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/');
    }

    public function delete($id)
    {
        DB::table('buku')->where('id',$id)->delete();

        return redirect("/");
    }


}
