@extends('template.master')

@section('title')
<h1>Manajemein show</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add new student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student" method="POST">
                @csrf
                <div class="form-group">
                <label for="inputNIS">Nomor Induk Siswa</label>
                <input type="text" name="nis" class="form-control" id="inputNIS" placeholder="Enter Nomor Induk Siswa" value="{{ $showSiswaById->nomor_induk_siswa }}" disabled >
              </div>

                <div class="form-group">
                    <label for="InputNama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="InputNama" placeholder="Enter Nama Anda" value="{{ $showSiswaById->nama }}" disabled>
                  </div>

                  <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Siswa" value="{{ $showSiswaById->alamat }}"></textarea>
                      </div>

                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option value="L" disabled {{ $showSiswaById->jenis_kelamin == "L" ? "selected" : "" }}>Laki-laki</option>
                  <option value="P" disabled {{ $showSiswaById->jenis_kelamin == "P" ? "selected" : "" }}>Perempuan</option>
                </select>
              </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection