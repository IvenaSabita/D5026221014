@extends('master2')
@section('title','Tambah Database Sepeda')
@section('judul_halaman')

@endsection

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Tambah Data </h3>

	<a class="btn btn-primary" href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/storeData" method="post" class="form-horizontal">
		{{ csrf_field() }}

         <div class = "form-group row">
            <label for = "kodepegawai" class = "col-sm-2 control-label">Kode Pegawai</label>
            <div class = "col-sm-8">
               <input  name="kodepegawai" type = "text" required = "required" class = "form-control" id = "kodepegawai" placeholder = "Masukan Kode Pegawai">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "namalengkap" class = "col-sm-2 control-label">Nama Lengkap</label>
            <div class = "col-sm-8">
               <input name = "namalengkap" type = "text"  required = "required" class = "form-control" id = "namalengkap" placeholder = "Masukan Nama Lengkap">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "divisi" class = "col-sm-2 control-label">Divisi</label>
            <div class = "col-sm-8">
                <input name = "divisi" type = "text"  required = "required" class = "form-control" id = "divisi" placeholder = "Masukan Divisi">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "departement" class = "col-sm-2 control-label">Departement</label>
            <div class = "col-sm-8">
                <input name = "departement" type = "text"  required = "required" class = "form-control" id = "departement" placeholder = "Masukan Nama Departement">
            </div>
         </div>
        <br>
		<input type="submit" value="Simpan Data" class="btn btn-primary">


	</form>

@endsection
