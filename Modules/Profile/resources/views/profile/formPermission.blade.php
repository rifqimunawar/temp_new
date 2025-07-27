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
  <span>Permission</span>
@endsection

@section('content-module')
  <!-- BEGIN row -->
  <div class="row justify-content-center">
    <div class="row col-md-12 card rounded">
      <div class="mb-3 text-center card-header rounded">
        <h4>{{ $title ?? '-' }}</h4>
      </div>

      <form action="{{ route('roles.storePermission', $data->id) }}" method="POST" enctype="multipart/form-data"
        class="card-body">
        @csrf


        <script>
          function toggleAllCheckboxes(source) {
            document.querySelectorAll('input[type="checkbox"]').forEach(cb => cb.checked = source.checked);
          }

          function toggleRow(menuId, checked) {
            ['create', 'read', 'update', 'delete'].forEach(action => {
              document.getElementById(action + '_' + menuId).checked = checked;
            });
          }
        </script>


        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Menu</th>
              <th class="text-center">
                Akses
                <span class="small text-muted">(CRU/D)</span>
              </th>
              <th>
                <input type="checkbox" id="semua" class="form-check-input"
                  onclick="document.querySelectorAll('.per-menu-toggle').forEach(cb => cb.click())">
                <label for="semua"> Semua</label>
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataMenu as $item)
              @php
                $current = $akses[$item->id] ?? null;
              @endphp
              <tr>
                <td>{{ $item->id }}</td>
                <td>{!! $item->indent_title !!}</td>
                <td class="text-end">
                  @foreach (['create', 'read', 'update', 'delete'] as $action)
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox"
                        name="akses[{{ $item->id }}][{{ $action }}]"
                        id="{{ $action }}_{{ $item->id }}"
                        {{ $current && $current->pivot->{'can_' . $action} ? 'checked' : '' }}>
                      <label class="form-check-label"
                        for="{{ $action }}_{{ $item->id }}">{{ ucfirst($action) }}</label>
                    </div>
                  @endforeach
                </td>
                <td class="text-start">
                  <input type="checkbox" class="per-menu-toggle form-check-input"
                    onclick="toggleRow({{ $item->id }}, this.checked)">
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>




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
