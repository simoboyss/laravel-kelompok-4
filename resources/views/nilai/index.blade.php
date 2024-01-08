@extends('main')
@section('title', 'Dashboard')
@section('breadcrumbs')
<h1 class="text-center mb-4">Data Nilai Fasilitator</h1>
@endsection

@section('content')


<div class="container">
  <a href="/nilai/create" type="button" class="btn btn-success">Tambah +</a>
  <div class="">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NIM</th>
          <th scope="col">NAMA <br> PESERTA</th>
          <th scope="col">NAMA <br> FASILITATOR</th>
          <th scope="col">NILAI <br> AKHIR</th>
          <th scope="col">PRESENSI</th>
          <th scope="col">TOTAL <br> NILAI</th>
          <th scope="col">KONVERSI <br> NILAI</th>
          <th scope="col">Level </th>
          <th scope="col">Tahun </th>
          <th scope="col">AKSI</th>
        </tr>
      </thead>
      <tbody>
        @php
        $no = 1;
        @endphp
        @foreach($nilai as $n)
        <tr>

          <th scope="n">{{$no++}}</th>
          <td>{{$n->nim}}</td>
          <td>{{$n->nama_peserta}}</td>
          <td>{{$n->nama_fasilitator}}</td>
          <td>{{$n->nilai_akhir}}</td>
          <td>{{$n->presensi}}</td>
          <td>{{$n->total_nilai}}</td>
          <td>{{$n->konversi_nilai}}</td>
          <td>{{$n->level}}</td>
          <td>{{$n->tahun}}</td>

          <td>
            <a href="/nilai/{{$n->id}}/edit" class="btn btn-info">Edit</a>
            <form action="/nilai/{{$n->id}}" method="POST">
              @csrf
              @method("delete")
              <input type="submit" value="Delete" class="btn btn-danger">
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection