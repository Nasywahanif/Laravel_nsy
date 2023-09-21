@extends('home')
@section('sekolah')

<h1>Sekolah</h1>

<div class="mb-3">
<form action="{{ route('sekolahs.update', $sekolahs->id) }}" method="post">
            @csrf
            @method('PUT')
                              <label class="form-label">Nama Sekolah</label>
                              <input type="text" class="form-control" name="nama_sekolah" placeholder="Tulis Nama Sekolah" value="{{$sekolahs->nama_sekolah}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Alamat Sekolah</label>
                              <input type="text" class="form-control" name="alamat" placeholder="Tulis Alamat Sekolah" value="{{$sekolahs->alamat}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jurusan</label>
                              <input type="text" class="form-control" name="jurusan" placeholder="Tulis Jurusan" value="{{$sekolahs->jurusan}}">
                            </div>

                            <div class="mb-3">
                              <label class="form-label">Jumlah Guru</label>
                              <input type="text" class="form-control" name="jumlah_guru" placeholder="Tulis Jumlah Guru" value="{{$sekolahs->jumlah_guru}}">
                            </div>
                            <button class="btn btn-primary"  values="simpan">Simpan</button> 
                            </form>

@endsection