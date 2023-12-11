<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        // mengambil data dari table pegawai
        // $pegawai = DB::table('karyawab')->get();
        $pegawai = DB::table('karyawan')->paginate();

        // mengirim data pegawai ke view index
        return view('index',['karyawan' => $karyawan]);
    }
    public function tambah(){

        // memanggil view tambah
        return view('tambahKaryawan');
    }

    public function store(Request $request){
        DB::table('pegawai')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap ' => $request->nama,
            'divisi' => $request->divisi,
            'departement' => $request->departement
        ]);
        return redirect('/karyawan');
    }


    public function update(Request $request){
        // update data karyawan

        DB::table('karyawan')->where('kodepegawai', $request->id) -> update([
            'kodepegawai' => $request->kode,
            'namalengkap ' => $request->nama,
            'divisi' => $request->divisi,
            'departement' => $request->departement
        ]);
        //alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
    }

    public function hapus($id){
        // menghapus data karyawan berdasarkan kode yang dipilih
        DB::table('karyawan')
            ->where('kodepegawai', $kode)
            ->delete();
        // alihkan ke halaman pegawai
        return redirect('/karyawan');
    }

}
