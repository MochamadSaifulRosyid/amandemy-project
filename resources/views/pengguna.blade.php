@extends('layout.template')
@section('konten')

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm pn-1 ">
          
          <div class="container">
          <a class="navbar-brand" href="#dataDosen" style="font-family: 'Poppins', sans-serif;">Management Dosen</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" href="login/admin">Kembali</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
        <!-- Akhir Navbar -->


                <!-- FORM PENCARIAN -->
                <div class="pb-3 pt-3 md">
                  <form class="d-flex" action="{{ url('dosen') }}" method="get">
                      <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                      <button class="btn btn-secondary" type="submit">Cari</button>
                  </form>
                </div>
                
                <!-- TOMBOL TAMBAH DATA -->
                <section id="">
                <div class="pb-3">
                  <a href='{{ url('dosen/create')}}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-0">No</th>
                            <th class="col-md-2">Kode Dosen</th>
                            <th class="col-md-4">Nama Dosen</th>
                            <th class="col-md-2">NIP/NIK</th>
                            <th class="col-md-1">NIDN</th>
                            <th class="col-md-2">Jabatan</th>
                            <th class="col-md-2">Email</th>
                            <th class="col-md-3">HP/WA</th>
                            <th class="col-md-4">Alamat</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                </table>
          </div>