@extends('main')
@section('title', 'Dashboard')
@section('breadcrumbs')
<div class="breadcrumbs">
  <h1 class="text-center mb-4">Dashboard</h1>
  @endsection
  @section('content')
  <div class="container">

    <div class="content mt-3">

      <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
          <span class="badge badge-pill badge-success">Success</span> Selamat Datang
          @auth <b>{{ Auth::user()->name }}</b>
          @endauth
          @guest
          <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
          <a class="btn btn-info" href="{{ route('register') }}">Register</a>
          @endguest
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
      </div>


      <div class="card">
        <div class="card-header">
          <strong class="card-title" v-if="headerText">Detail Kelompok</strong>
        </div>

        <div class="card-body">

          <div class="typo-headers">
            <h1 class="pb-2 display-4">Kelompok 4</h1>
          </div>
          
          <div class="vue-lists">
            <h2 class="mb-4">Lists Anggota Kelompok</h2>
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <li>ROHIID HIBBAN ANNAFI
                      <ul class="vue-list-inner">
                        <li>integrasi data (menggunakan join) dari tabel peserta, fasilitator dan tabel nilai softskill.</li>
                      </ul>
                  </li>
                  <li>MARTIN NUH HANAN
                      <ul class="vue-list-inner">
                        <li>CRUD memasukkan nilai berdasarkan nim, nama peserta, nama fasilitator. nilai akhir, presensi, total nilai.</li>
                      </ul>
                  </li>
                  <li>SUWARDI
                      <ul class="vue-list-inner">
                        <li>integrasi data (menggunakan join) dari tabel peserta, fasilitator dan tabel pengguna</li>
                      </ul>
                  </li>
                  <li>MEITRI LINDAWATI
                      <ul class="vue-list-inner">
                        <li>CRUD yang menampilkan id, NIDN, Nama Lengkap, Prodi</li>
                      </ul>
                  </li>
                  <li>SIMO WIBOWO
                      <ul class="vue-list-inner">
                        <li>CRUD yang menampilkan id, NIM, Nama Lengkap, Prodi,Level berdasarkan tahun</li>
                      </ul>
                  </li>
                  <li>FAHMI SYAMSUL MUNIR</li>
                  <li>FAJAR PONCO ADI WIBOWO
                  <ul class="vue-list-inner">
                        <li>registrasi, login, forgot password,</li>
                      </ul>
                  </li>
                </ul>
              </div>
              
            </div>
          </div>

        </div>
      </div>

    </div>

  </div>

</div>

@endsection