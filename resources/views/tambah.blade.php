@extends('master2')
@section('title','Tambah Database')
@section('judul_halaman')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "firstname" class = "col-sm-2 control-label">First Name</label>
            <div class = "col-sm-10">
               <input type = "text" class = "form-control" id = "firstname" placeholder = "Enter First Name">
            </div>
         </div>

		Nama <input type="text" name="nama"> <br/>
		Jabatan <input type="text" name="jabatan"> <br/>
		Umur <input type="number" name="umur"> <br/>
		Alamat <textarea name="alamat"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>



@endsection
