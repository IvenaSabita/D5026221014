@extends('master2')
@section('title','Edit Lipstick')
@section('judul_halaman')

@endsection

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Sepatu</h3>

	<a href="/sepatu" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	@foreach($sepeda as $l)
	<form action="/sepatu/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $l->kodesepeda }}"> <br/>
        <div class = "form-group">
            <label for = "merk" class = "col-sm-2 control-label">Nama Merk</label>
            <div class = "col-sm-10">
               <input  name="merk" type = "text" required = "required" class = "form-control" id = "merk" value="{{ $l->merksepeda }}" readonly>
            </div>
        </div>
		<div class = "form-group">
		   <label for = "stock" class = "col-sm-2 control-label">Stock Sepeda</label>
		   <div class = "col-sm-10">
			   <input  name="stock" type = "number" required = "required" class = "form-control" id = "stock"  value="{{ $l->stocksepeda }}">
		   </div>
		</div>
		<div class = "form-group">
		   <label for = "tersedia" class = "col-sm-2 control-label">Ketersediaan Stock</label>
		   <div class = "col-sm-10">
            <select name = "tersedia" class="form-select" required = "required" id = "tersedia">
                <option>Y</option>
                <option>N</option>
            </select>
		   </div>
		</div>
        <br>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach


@endsection
