@extends('settings::layouts.master')
@php
  use App\Helpers\Fungsi;
  use app\Helpers\GetSettings;
@endphp
@section('breadcrumb')
  <a href="" class="text-blue-600 no-underline">Settings</a>
  <span>/</span>
  <span>Menu</span>
  <span>/</span>
  <span>Tambah</span>
@endsection

@section('content-module')
  <!-- BEGIN row -->
  <div class="row justify-content-center">
    <div class="row col-md-6 card rounded">
      <div class="mb-3 text-center card-header rounded">
        <h4>{{ $title ?? '-' }}</h4>
      </div>

      <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="card-body">
        @csrf

        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" id="username"
            class="form-control @error('username') is-invalid @enderror"
            value="{{ old('username', $data->username ?? '') }}" required>
          @error('username')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email', $data->email ?? '') }}" required>
          @error('email')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" id="password"
            class="form-control @error('password') is-invalid @enderror">
          @error('password')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="konfirmasi" class="form-label">Konfirmasi Password</label>
          <input type="password" name="konfirmasi" id="konfirmasi"
            class="form-control @error('konfirmasi') is-invalid @enderror">
          @error('konfirmasi')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="role_id" class="form-label">Role</label>
          <select name="role_id" id="role_id" class="form-select @error('role_id') is-invalid @enderror" required>
            <option value="">-- Pilih Role --</option>
            @foreach ($dataRole as $role)
              <option value="{{ $role->id }}"
                {{ old('role_id', $data->role_id ?? '') == $role->id ? 'selected' : '' }}>
                {{ $role->role_name }}
              </option>
            @endforeach
          </select>
          @error('role_id')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>


        <div class="text-center">
          <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
          <a href="{{ route('user.index') }}" class="btn btn-sm btn-warning">Kembali</a>
          <button type="submit" class="btn btn-sm btn-primary">Simpan
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- END row -->
@endsection
