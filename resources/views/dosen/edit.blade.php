@extends('layout.template')
@section('konten')


<!-- START FORM -->
<form action='{{ url('dosen/'.$data->kode_dosen)}}' method='post'>
    @csrf
    @method('PUT')
    
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href='{{ url('dosen') }}' class="btn btn-secondary"><< kembali</a>
            <div class="mb-3 row">
                <label for="kode_dosen" class="col-sm-2 col-form-label">Kode Dosen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='kode_dosen' value="{{ $data->kode_dosen }}" id="kode_dosen">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nama_dosen" class="col-sm-2 col-form-label">Nama Dosen</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama_dosen' value="{{ $data->nama_dosen }}" id="nama_dosen">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nip_nik" class="col-sm-2 col-form-label">NIP/NIK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nip_nik' value="{{ $data->nip_nik }}" id="nip_nik">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="nidn" class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='nidn' value="{{ $data->nidn }}" id="nidn">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jabatan' value="{{ $data->jabatan }}" id="jabatan">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='email' value="{{ $data->email }}" id="email">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="hp_wa" class="col-sm-2 col-form-label">HP/WA</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='hp_wa' value="{{ $data->hp_wa }}" id="hp_wa">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='alamat' value="{{ $data->alamat }}" id="alamat">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->

     @endsection('konten')  