@extends('layouts.app')

@section('title', 'Data Kategori')

@section('title', 'Data Kategori')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
    </div>
    <div class="card-body">
			@if (auth()->user()->level == 'Admin')
      <a href="{{ route('kategori.tambah') }}" class="btn btn-primary mb-3">Tambah Kategori</a>
			@endif
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
							@if (auth()->user()->level == 'Admin')
              <th>Aksi</th>
							@endif
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($kategori as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->nama }}</td>
								@if (auth()->user()->level == 'Admin')
                <td>
                  <a href="{{ route('kategori.edit', $row->id) }}" class="btn btn-secondary">Edit</a>
                  <a href="{{ route('kategori.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                </td>
								@endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
