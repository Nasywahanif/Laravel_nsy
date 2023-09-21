@extends('home')
@section('sekolah')

<h1>Sekolah</h1>

<div class="mb-3">
  <form action="/sekolahs" method="post">
    @csrf
                              <label class="form-label">Nama Sekolah</label>
                              <input type="text" class="form-control" name="nama_sekolah" placeholder="Tulis Nama Sekolah">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Alamat Sekolah</label>
                              <input type="text" class="form-control" name="alamat_sekolah" placeholder="Tulis Alamat Sekolah">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" class="form-control" name="jurusan" placeholder="Tulis Jurusan">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jumlah Guru</label>
                              <input type="text" class="form-control" name="jumlah_guru" placeholder="Tulis Jumlah Guru">
                            </div>
                            <button class="btn btn-primary"  values="simpan">Simpan</button> 
                            </form>

@endsection