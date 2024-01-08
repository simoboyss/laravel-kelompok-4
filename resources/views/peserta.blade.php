@extends('main')
@section('title', 'Dashboard')
@section('breadcrumbs')
<h1 class="text-center mb-4">Data Peserta Softskill</h1>
@endsection
@section('content')
<div class="content mt-1">

    <div class="animated fadeIn">

        <div class="container">

            <form action="/peserta" method="GET" class="mb-2 " id="filterForm">
                <div class="input-group">
                    <label for="prodi" class="me-2">Program Studi:</label>
                    <select name="prodi" id="prodi" class="select" onchange="submitForm()">
                        <option value="">Semua Program Studi</option>
                        @foreach($programStudis2 as $program)
                        <option value="{{ $program->prodi }}" {{ $selectedProdi2==$program->prodi ? 'selected' : '' }}>
                            {{ $program->prodi }}
                        </option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn btn-secondary ms-2"
                        style="border-top-left-radius: 0; border-bottom-left-radius: 0;">Filter</button>
                </div>
            </form>

            <div class="card-body">
                <div class="table-responsive">
                    <div class="card-header d-flex justify-content-between" style="background-color: #ffffff;">
                        <div class="col-auto">
                            <form action="/peserta" method="GET"
                                class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group"
                                    style="border-top-right-radius: 25px; border-bottom-right-radius: 25px;">
                                    <input type="search" name="search2" id="inputSearch" class="form-control bg-light"
                                        placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"
                                        style="border-top-left-radius: 5px; border-bottom-left-radius: 5px; border-top-right-radius: 0; border-bottom-right-radius: 0;">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" onclick="submitForm()"
                                            style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <a href="/tambahpeserta" type="button" class="btn btn-success">Tambah +</a>
                        </div>
                    <script>
                        function submitForm() {
                            document.getElementById("searchForm").submit();
                        }
                    </script>
                </div>
                
                <div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{$message}}
                    </div>
                    @endif
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Prodi</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Level</th>
                        <th scope="col">ID Fasilitator</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                        $no = 1;
                      @endphp
                      @foreach ($data as $row)
                      <tr>
                        <th scope="row">{{$no++}}</th>
                        <td>{{$row->nim}}</td>
                        <td>{{$row->nama_lengkap}}</td>
                        <td>{{$row->prodi}}</td>
                        <td>{{$row->levelthn}}</td>
                        <td>{{$row->level}}</td>
                        <td>{{$row->fasilitator_id}}</td>

                        <td>
                            <a href="/delete/{{ $row->id }}" class="btn btn-danger">Hapus</a> 
                            <a href="/editpeserta/{{ $row->id }}" class="btn btn-info">Ubah</a> 
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="bootstrap-data-table_info" role="status"
                                aria-live="polite">Menampilkan 1 sampai 5 dari 15 data</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="bootstrap-data-table_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous enabled"
                                        id="bootstrap-data-table_previous">
                                        <a href="{{ $data->previousPageUrl() }}" aria-controls="bootstrap-data-table"
                                            data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                    </li>
                                    <li class="paginate_button page-item ">
                                        <a href="/peserta" aria-controls="bootstrap-data-table" data-dt-idx="1"
                                            tabindex="0" class="page-link">1</a>
                                    </li>
                                    <li class="paginate_button page-item "><a href="/peserta?page=2"
                                            aria-controls="bootstrap-data-table" data-dt-idx="2" tabindex="0"
                                            class="page-link">2</a>
                                    </li>
                                    <li class="paginate_button page-item "><a href="/peserta?page=3"
                                            aria-controls="bootstrap-data-table" data-dt-idx="3" tabindex="0"
                                            class="page-link">3</a>
                                    </li>
                                    <li class="paginate_button page-item next" id="bootstrap-data-table_next"><a
                                            href="{{ $data->nextPageUrl() }}" aria-controls="bootstrap-data-table"
                                            data-dt-idx="7" tabindex="0" class="page-link">Next</a>
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