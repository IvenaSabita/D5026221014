@extends('master2')
@section('title','Database Karayawan')
@section('judul_halaman')
<h2>www.malasngoding.com</h2>
<h3>Data Karyawan</h3>


@endsection

@section('konten')
<br/>
<a class="btn btn-primary" href="/sepeda/tambah"> + Tambah Data</a>
<br>
<br>
	<table class="table table-striped table-hover table-responsive">
		<tr class="bg-info">
			<th class="text-center">Kode Pegawai</th>
			<th class="text-center">Nama Lengkap</th>
			<th class="text-center">Divisi</th>
			<th class="text-center">Departement</th>
            <th class="text-center">Opsi</th>
		</tr>
		@foreach($karyawan as $k)
		<tr>
            <td class="text-center">{{ $s->kodepegawai }}</td>
            <td class="text-center">{{ $s->namalengkap }}</td>
            <td class="text-center"> {{ $s->divisi }}</td>
            <td class="text-center"> {{ $s->departement }}</td>
            </div>
            <td class="text-center">
				<a href="/sepeda/hapus/{{ $s->kodesepedamotor }}" class="btn btn-danger">Hapus</a>

			</td>
		</tr>
		@endforeach
	</table>
@endsection
