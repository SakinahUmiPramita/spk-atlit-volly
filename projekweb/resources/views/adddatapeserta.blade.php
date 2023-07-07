@extends('layout.page')

@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Peserta</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Peserta</li>
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
                <h3 class="card-title">Add Peserta</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ url('/peserta/store')}}" class="form-horizontal">
                @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_peserta" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="nama_peserta" placeholder="Nama Peserta" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                      <div class="col-sm-10">
                        <select class="custom-select" name="jenis_kelamin" required>
                          <option>-- Jenis Kelamin --</option>
                          <option>L</option>
                          <option>P</option>
                        </select>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="berat_badan" class="col-sm-2 col-form-label">Berat Badan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="berat_badan" placeholder="Berat Badan" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi Badan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tinggi_badan" placeholder="Tinggi Badan" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="stamina" class="col-sm-2 col-form-label">Stamina</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="stamina" placeholder="Stamina" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="event" class="col-sm-2 col-form-label">Event</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="event" placeholder="Event" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kejuaraan" class="col-sm-2 col-form-label">Kejuaraan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="kejuaraan" placeholder="Kejuaraan" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Create</button>
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