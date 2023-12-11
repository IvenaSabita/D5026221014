@extends('master2')
@section('title','Database Sepeda')
@section('judul_halaman')
<h2>www.malasngoding.com</h2>
<h3>Data Sepeda</h3>
@endsection

@section('konten')
<p>Cari Data Sepeda :</p>
<form action="/sepeda/cari" method="GET" class="form-inline">
    <input class="form-control" type="text" name="cari" placeholder="Cari Sepeda Motor berdasarkan merk .." value="{{ old('cari') }}">
    <input type="submit" value="CARI" class="btn btn-primary ml-3">
</form>
<br/>
<a class="btn btn-primary" href="/sepeda/tambah"> + Tambah Data</a>
<br>
<br>
	<table class="table table-striped table-hover table-responsive">
		<tr class="bg-info">
			<th class="text-center">Kode Sepeda</th>
			<th class="text-center">Merk Sepeda</th>
			<th class="text-center">Stock Sepeda</th>
			<th class="text-center">Tersedia</th>
            <th class="text-center">Opsi</th>
		</tr>
		@foreach($sepeda as $s)
		<tr>
            <td class="text-center">{{ $s->kodesepedamotor }}</td>
            <td class="text-center">{{ $s->merksepeda }}</td>
            <td class="text-center"> {{ $s->stocksepeda }}</td>
              <div class="text-center">
                <td
                @if ($s->tersedia =="Y" ){
                    class = "bg-success text-white text-center "
                }
                @else{
                    class = "bg-danger text-white text-center" value = "Tidak Ada"
                }
                @endif
                >{{ $s->tersedia }}
                </td>
            </div>
            <td class="text-center">
				<a href="/sepeda/edit/{{ $s->kodesepedamotor }}" class="btn btn-warning">Edit</a>
				|
				<a href="/sepeda/hapus/{{ $s->kodesepedamotor }}" class="btn btn-danger">Hapus</a>
                |
                <a href="/sepeda/view/{{ $s->kodesepedamotor }}" class="btn btn-success">View</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection
