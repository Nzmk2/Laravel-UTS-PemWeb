@extends('layouts.app')

@section('title', 'Data Pengguna')

@section('title', 'Data Pengguna')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
    </div>
    <div class="card-body">
			@if (auth()->user()->level == 'Admin')
      <a href="{{ route('user.tambah') }}" class="btn btn-primary mb-3">Tambah Pengguna</a>
			@endif
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Pengguna</th>
              <th>Email</th>
              <th>Level</th>
							@if (auth()->user()->level == 'Admin')
              <th>Aksi</th>
							@endif
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($user as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->level }}</td>
								@if (auth()->user()->level == 'Admin')
                <td>
                  <a href="{{ route('user.edit', $row->id) }}" class="btn btn-secondary">Edit</a>
                  <a href="{{ route('user.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
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
