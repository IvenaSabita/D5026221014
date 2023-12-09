<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepedaController extends Controller{

    public function indexSepeda(){
        $sepeda = DB::table('sepeda')->get();

        return view('indexSepeda',['sepeda' => $sepeda]);
    }

    public function tambahData(){

        return view('tambahSepeda');
    }

    public function storeData(Request $request){

        DB::table('sepeda')->insert([
            'merksepeda' => $request->merk,
            'stocksepeda' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/sepeda');
    }

    public function edit($kode){

        $sepeda = DB::table('sepeda')->where('kodesepedamotor',$kode)->get();

        return view('editSepeda',['sepeda' => $sepeda]);
    }


    public function update(Request $request){

        DB::table('sepeda')->where('kodesepedamotor',$request->id)->update([
            'merksepeda' => $request->merk,
            'stocksepeda' => $request->stock,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/sepeda');
    }

    public function cari(Request $request)
	{

		$cari = $request->cari;

		$lipstick = DB::table('sepeda')
		->where('merksepeda','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexSepeda',['sepeda' => $lipstick]);

	}


    public function hapus($kode){
        DB::table('sepeda')->where('kodesepedamotor',$kode)->delete();

        return redirect('/sepeda');
    }

}
