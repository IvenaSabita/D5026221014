@extends('master2')

@section('judul_halaman')
    <h2><a href="https://www.malasngoding.com">Database Sepeda Motor✨</a></h2>
    <h3>View Sepeda</h3>

    <a href="/sepeda">Kembali</a>

    <br/>
    <br/>
@endsection

@section('konten')
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3">
            <div class="card" style="width:200px">
                <img src="{{ asset('assets/ETS/gts.jpg') }}">
                <div class="card-body">
                    <h4 class="card-title">Nama</h4>
                    <p class="card-text">Sepeda Motor</p>
                    <a href="#" class="btn btn-primary">See Detail</a>
                </div>
            </div>
        </div>
        <div class="col-8">
            @foreach ($sepeda as $s)
                <fieldset disabled>
                    <form action="/sepeda/update" method="post" class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <input type="hidden" name="kode" value="{{ $s->kodesepedamotor }}">
                        <div class = "form-group">
                            <label for = "kodesepedamotor" class = "col-sm-5 control-label">Kode Sepeda Motor</label>
                            <div class = "col-sm-10">
                                <input type="text" required="required" name="kodesepedamotor" value="{{ $s->kodesepedamotor }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "merksepeda" class = "col-sm-2 control-label">Merk</label>
                            <div class = "col-sm-10">
                                <input type="text" required="required" name="merksepeda" value="{{ $s->merksepeda}}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "stocksepeda" class = "col-sm-2 control-label">Stock</label>
                            <div class = "col-sm-10">
                                <input type="number" required="required" name="stocksepeda" value="{{ $s->stocksepeda}}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "tersedia" class = "col-sm-2 control-label"> Tersedia</label>
                            <div class = "col-sm-10">
                                <textarea required="required" name="alamat" class="form-control">{{ $s->tersedia }}</textarea>
                            </div>
                        </div>
                    </form>
                </fieldset>
            @endforeach
            <div class="row">
                <div class="col-10 text-center">
                    <a href="/sepeda" class="btn btn-primary w-25 p-2">Ok</a>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
@endsection
