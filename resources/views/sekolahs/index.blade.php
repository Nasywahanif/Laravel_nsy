@extends('home')
@section('sekolah')
<h1>Sekolah</h1>

<div class="card">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>Nama Sekolah</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Jumlah Guru</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($sekolahs as $sekolah)
            
            <td>{{ $sekolah -> nama_sekolah }}</td>
            <td>{{ $sekolah -> alamat }}</td>
            <td>{{ $sekolah -> jurusan }}</td>
            <td>{{ $sekolah -> jumlah_guru }}</td>
            <td>
                <a href="#">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection