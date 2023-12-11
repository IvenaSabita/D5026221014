<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    // method untuk menampilkan view record seluruh karyawan
    {

        $karyawan = DB::table('karyawan')->get();

    	return view('indexKaryawan',['karyawan' => $karyawan]);

    }

    // method untuk menampilkan form tambah karyawan
	public function tambah()
	{

		return view('tambahKaryawan');

	}

	// method untuk menambahkan data karyawan baru ke table karyawan
	public function store(Request $request)
	{
        //valiadasi input
        $request->validate([
            'kodepegawai' =>
                'required',
                'max:5',
            'namalengkap' => 'required|max:50',
            'divisi' => 'required|max:20',
            'departemen' => 'required|max:20',
        ]);

        // insert data
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		return redirect('/karyawan')->with('success', 'Data Karyawan telah diperbarui');

	}

	// method untuk hapus data karyawan berdasarkan Kode
	public function hapus($kodepegawai)
	{
		DB::table('karyawan')->where('kodepegawai',$kodepegawai)->delete();

		return redirect('/karyawan');
	}

}
