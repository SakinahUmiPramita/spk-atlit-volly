@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data peserta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Data peserta</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Data peserta</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/peserta/update/'.$peserta->id) }}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_peserta" class="col-sm-2 col-form-label">Nama Peserta</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_peserta" placeholder="Nama Peserta" value="{{ $peserta->nama_peserta}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" value="{{ $peserta->jenis_kelamin}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="berat_badan" placeholder="Berat Badan" value="{{ $peserta->berat_badan}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan" value="{{ $peserta->tinggi_badan}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="stamina" class="col-sm-2 col-form-label">Stamina</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="stamina" placeholder="Stamina" value="{{ $peserta->stamina}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="event" class="col-sm-2 col-form-label">Event</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="event" placeholder="Event" value="{{ $peserta->event}}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kejuaraan" class="col-sm-2 col-form-label">Kejuaraan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kejuaraan" placeholder="Kejuaraan" value="{{ $peserta->kejuaraan}}" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Simpan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @endsection