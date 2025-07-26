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

      <form action="{{ route('roles.store') }}" method="POST" enctype="multipart/form-data" class="card-body">
        @csrf

        <div class="mb-3">
          <label for="role_name" class="form-label">Role Akses</label>
          <input type="text" name="role_name" id="role_name"
            class="form-control @error('role_name') is-invalid @enderror"
            value="{{ old('role_name', $data->role_name ?? '') }}" required>

          @error('role_name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>


        <div class="text-center">
          <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
          <a href="{{ route('roles.index') }}" class="btn btn-sm btn-warning">Kembali</a>
          <button type="submit" class="btn btn-sm btn-primary">Simpan
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- END row -->
@endsection
