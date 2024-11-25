@extends('layouts.app')

@section('title', 'Form Pengguna')

@section('contents')
  <form action="{{ isset($user) ? route('user.tambah.update', $user->id) : route('user.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($user) ? 'Form Edit Pengguna' : 'Form Tambah Pengguna' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama user</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($user) ? $user->nama : '' }}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ isset($user) ? $user->email : '' }}">
              </div>
              <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" value="{{ isset($user) ? $user->password : '' }}">
              </div>
            <div class="form-group">
              <label for="level">Level Penngguna</label>
							<select name="level" id="level" class="custom-select">
								<option value="" selected disabled hidden>-- Pilih Kategori --</option>
                                <option value="Admin">-- Admin --</option>
                                <option value="User">-- User --</option>
							</select>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
