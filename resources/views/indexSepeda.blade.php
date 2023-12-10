@extends('master2')
@section('title','Database Sepeda')
@section('judul_halaman')
<h2>www.malasngoding.com</h2>
<h3>Data Sepeda</h3>

<p>Cari Data Sepeda :</p>
	<form  action="/sepeda/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Sepeda Berdasarkan Merk .." value="{{ old('cari') }}"> <br>
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>
    <br>
	<a class="btn btn-primary" href="/sepeda/tambah"> + Tambah Data</a>

	<br/>
	<br/>

@endsection

@section('konten')

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Sepeda</th>
			<th>Merk Sepeda</th>
			<th>Stock Sepeda</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($sepeda as $l)
		<tr>
            <td>{{ $l->kodesepedamotor }}</td>
            <td>{{ $l->merksepeda }}</td>
            <td> {{ $l->stocksepeda }}</td>
            <div class="text-center">
                <td
                @if ($l->tersedia =="Y" ){
                    class = "bg-success text-white text-center"
                }
                @else{
                    class = "bg-danger text-white text-center" value = "Tidak Ada"
                }
                @endif
                >{{ $l->tersedia }}
                </td>
            </div>
            <td>
				<a href="/sepeda/edit/{{ $l->kodesepedamotor }}" class="btn btn-warning">Edit</a>
				|
				<a href="/sepeda/hapus/{{ $l->kodesepedamotor }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
