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

      <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data" class="card-body">
        @csrf

        <div class="mb-3">
          <label for="title" class="form-label">Judul Menu</label>
          <input type="text" name="title" id="title" class="form-control"
            value="{{ old('title', $data->title ?? '') }}" required>
        </div>

        <div class="mb-3">
          <label for="url" class="form-label">URL</label>
          <input type="text" name="url" id="url" class="form-control"
            value="{{ old('url', $data->url ?? '') }}" required>
        </div>

        <div class="mb-3">
          <label for="icon" class="form-label">Icon (optional) <a href="https://fontawesome.com/search?ic=free&o=r"
              target="_blank" rel="noopener noreferrer">Cari Icon</a> </label>
          <input type="text" name="icon" id="icon" class="form-control" placeholder=" <i class. . . . . /i> "
            value="{{ old('icon', $data->icon ?? '') }}">
        </div>

        <div class="form-check form-switch mb-3">
          <input class="form-check-input" type="checkbox" role="switch" name="caret" id="caret"
            {{ old('caret', $data->caret ?? false) ? 'checked' : '' }}>
          <label class="form-check-label" for="caret">Caret</label>
        </div>

        <div class="form-check form-switch mb-3">
          <input class="form-check-input" type="checkbox" role="switch" name="is_aktif" id="is_aktif"
            {{ old('is_aktif', $data->is_aktif ?? true) ? 'checked' : '' }}>
          <label class="form-check-label" for="is_aktif">Aktif</label>
        </div>

        <div class="mb-3">
          <label for="parent_id" class="form-label">Parent Menu</label>
          <select name="parent_id" class="form-select">
            <option value="">-- Pilih Menu Induk --</option>
            @foreach ($dataMenu as $item)
              <option value="{{ $item->id }}"
                {{ old('parent_id', $selectedParentId ?? '') == $item->id ? 'selected' : '' }}>
                {!! $item->indent_title !!}
              </option>
            @endforeach
          </select>
        </div>

        <div class="text-center">
          <input type="hidden" name="id" value="{{ $data->id ?? '' }}">
          <a href="{{ route('menu.index') }}" class="btn btn-sm btn-warning">Kembali</a>
          <button type="submit" class="btn btn-sm btn-primary">Simpan
          </button>
        </div>
      </form>
    </div>
  </div>

  <!-- END row -->
@endsection
