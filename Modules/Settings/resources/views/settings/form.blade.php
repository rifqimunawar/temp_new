@extends('settings::layouts.master')
@php
  use App\Helpers\Fungsi;
  use app\Helpers\GetSettings;
@endphp
@section('breadcrumb')
  <a href="" class="text-blue-600 no-underline">Settings</a>
  <span>/</span>
  <span>General</span>
@endsection

@section('content-module')
  <!-- BEGIN row -->
  <div class="row justify-content-center">
    <div class="row col-md-8 card rounded">
      <div class="mb-3 text-center card-header rounded">
        <h4>{{ $title ?? '-' }}</h4>
      </div>

      <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data" class="card-body">
        @csrf

        <input type="hidden" name="id" value="{{ $data->id ?? '' }}">

        {{-- Nama --}}
        <div class="mb-3">
          <label for="name" class="form-label">Nama</label>
          <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name', $data->name ?? '') }}" required>
          @error('name')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        {{-- Alamat --}}
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror"
            value="{{ old('alamat', $data->alamat ?? '') }}">
          @error('alamat')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email', $data->email ?? '') }}">
          @error('email')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        {{-- Phone --}}
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="text" name="phone" id="phone" class="form-control @error('phone') is-invalid @enderror"
            value="{{ old('phone', $data->phone ?? '') }}">
          @error('phone')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        {{-- Base URL --}}
        <div class="mb-3">
          <label for="base_url" class="form-label">Base URL</label>
          <input type="text" name="base_url" id="base_url"
            class="form-control @error('base_url') is-invalid @enderror"
            value="{{ old('base_url', $data->base_url ?? '') }}">
          @error('base_url')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        {{-- Description --}}
        <div class="mb-3">
          <label for="description" class="form-label">Deskripsi</label>
          <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
            rows="3">{{ old('description', $data->description ?? '') }}</textarea>
          @error('description')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        {{-- Facebook --}}
        <div class="mb-3">
          <label for="social_facebook" class="form-label">Facebook</label>
          <input type="text" name="social_facebook" id="social_facebook"
            class="form-control @error('social_facebook') is-invalid @enderror"
            value="{{ old('social_facebook', $data->social_facebook ?? '') }}">
          @error('social_facebook')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        {{-- Twitter --}}
        <div class="mb-3">
          <label for="social_twitter" class="form-label">Twitter</label>
          <input type="text" name="social_twitter" id="social_twitter"
            class="form-control @error('social_twitter') is-invalid @enderror"
            value="{{ old('social_twitter', $data->social_twitter ?? '') }}">
          @error('social_twitter')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        {{-- Instagram --}}
        <div class="mb-3">
          <label for="social_instagram" class="form-label">Instagram</label>
          <input type="text" name="social_instagram" id="social_instagram"
            class="form-control @error('social_instagram') is-invalid @enderror"
            value="{{ old('social_instagram', $data->social_instagram ?? '') }}">
          @error('social_instagram')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
        </div>

        {{-- Logo --}}
        <div class="mb-3">
          <label for="logo" class="form-label">Logo</label>
          @if (!empty($data->logo))
            <div class="mb-2">
              <img src="{{ asset('img/' . $data->logo) }}" alt="Logo" height="60">
            </div>
          @endif
          <input type="file" name="logo" id="logo" class="form-control @error('logo') is-invalid @enderror"
            accept="image/*" onchange="previewLogo(event)">
          @error('logo')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
          <div class="mt-2" id="preview-logo"></div>
        </div>

        {{-- Background --}}
        <div class="mb-3">
          <label for="background" class="form-label">Background</label>
          @if (!empty($data->background))
            <div class="mb-2">
              <img src="{{ asset('img/' . $data->background) }}" alt="Background" height="60">
            </div>
          @endif
          <input type="file" name="background" id="background"
            class="form-control @error('background') is-invalid @enderror" accept="image/*"
            onchange="previewBackground(event)">
          @error('background')
            <div class="invalid-feedback text-danger">{{ $message }}</div>
          @enderror
          <div class="mt-2" id="preview-background"></div>
        </div>


        <div class="text-center">
          <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
        </div>
      </form>

    </div>
  </div>
  <script>
    function previewLogo(event) {
      let output = document.getElementById('preview-logo');
      output.innerHTML = '<img src="' + URL.createObjectURL(event.target.files[0]) + '" height="60">';
    }

    function previewBackground(event) {
      let output = document.getElementById('preview-background');
      output.innerHTML = '<img src="' + URL.createObjectURL(event.target.files[0]) + '" height="60">';
    }
  </script>
  <!-- END row -->
@endsection
