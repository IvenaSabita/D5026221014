@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Karyawan</h3>

    <a class="btn btn-primary" href="/Karyawan"> Kembali</a>

    <br />
    <br />

    <form action="/karyawan/store" method="post">
        {{ csrf_field() }}
        <div class = "form-group row">
            <label for = "kodepegawai" class = "col-sm-3 control-label">Kode Pegawai</label>
            <div class = "col-sm-8">
                <input name="kodepegawai" type = "text" class = "form-control" id = "kodepegawai"
                    placeholder = "Masukkan Kode Pegawai">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "namalengkap" class = "col-sm-3 control-label">Nama Lengkap Karyawan</label>
            <div class = "col-sm-8">
                <input name="namalengkap" type = "text" class = "form-control" id = "namalengkap"
                    placeholder = "Masukkan Nama Lengkap karyawan">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "divisi" class = "col-sm-3 control-label">Divisi</label>
            <div class = "col-sm-8">
                <input name="divisi" type = "text" class = "form-control" id = "divisi"
                    placeholder = "Masukkan Keterangan Divisi">
            </div>
        </div>
        <div class = "form-group row">
            <label for = "departemen" class = "col-sm-3 control-label">Departemen</label>
            <div class = "col-sm-8">
                <input name="departemen" type = "text" class = "form-control" id = "departemen"
                    placeholder = "Masukkan Keterangan Departemen">
            </div>
        </div>
        <input type="submit" value="Simpan" class="btn btn-primary">
    </form>
@endsection
