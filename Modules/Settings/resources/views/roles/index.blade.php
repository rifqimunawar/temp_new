@extends('settings::layouts.master')
@php
  use App\Helpers\Fungsi;
  use app\Helpers\GetSettings;
@endphp
@section('breadcrumb')
  <a href="" class="text-blue-600 no-underline">Settings</a>
  <span>/</span>
  <span>Menu</span>
@endsection

@section('content-module')
  <!-- BEGIN row -->
  <div class="row card rounded">
    <div class="mb-3 text-center card-header">
      <h4>{{ $title ?? '-' }}</h4>
    </div>

    <script type="text/template" id="customAddButtonTemplate">
      <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary mr-3"> <i class="fa fa-plus" style="font-size: 14px; color: white;"></i> Tambah</a>
    </script>


    <table id="datatableDefault" class="table text-nowrap w-100">
      <thead>
        <tr>
          <th>No.</th>
          <th>Role</th>
          <th>Url</th>
          <th>#</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->role_name ?? '-' }}</td>
            <td>{{ $item->role_name ?? '-' }}</td>
            <td>
              <a href="{{ route('roles.permission', $item->id) }}" style="text-decoration: none; margin-right: 15px;">
                <i class="fa fa-list" style="font-size: 16px; margin-right:5px; color: yellow;"></i>
              </a>
              <a href="{{ route('roles.edit', $item->id) }}" style="text-decoration: none;">
                <i class="fa fa-pencil-square" style="font-size: 16px; margin-right:5px; color: blue;"></i>
              </a>
              <a href="{{ route('roles.destroy', $item->id) }}" data-confirm-delete="true" style="text-decoration: none;">
                <i class="fa fa-trash mx-2" style="font-size: 16px; color: red;"></i>
              </a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
  <!-- END row -->
@endsection
