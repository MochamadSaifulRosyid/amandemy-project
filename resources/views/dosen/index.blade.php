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
                      <?php $i = $data->firstItem() ?>
                      @foreach ($data as $item)
                      <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->kode_dosen }}</td>
                        <td>{{ $item->nama_dosen }}</td>
                        <td>{{ $item->nip_nik }}</td>
                        <td>{{ $item->nidn }}</td>
                        <td>{{ $item->jabatan }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->hp_wa }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href='{{ url('dosen/'.$item->kode_dosen.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                              <form onsubmit="return confirm('Yakin akan mengahapus data?')" class='d-inline' action="{{ url('dosen/'.$item->kode_dosen) }}" method="post">
                                @csrf
                                @method('DELETE')
                                  <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                              </form>
                        </td>
                    </tr>   
                    <?php $i++ ?>
                      @endforeach
                        
                    </tbody>
                </table>
                </section>

                {{ $data->withQueryString()->links() }}  
          </div>
          <!-- AKHIR DATA -->
          @endsection