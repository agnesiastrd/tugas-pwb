@extends('template.master');

@section('judul')
<h1>management siswa</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new mayor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/kelas" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="Inputkelas">kelas</label>
                    <input type="text" name="nama_kelas" class="form-control" id="inputkelas" placeholder="Masukan kelas">
                  </div>

                  <div class="form-group">
                    <label for="Inputjurusan">jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="inputjurusan" placeholder="Masukan jurusan">
                  </div>

                </select>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            
@endsection