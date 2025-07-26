@extends('settings::layouts.master')
@php
  use App\Helpers\Fungsi;
  use app\Helpers\GetSettings;
@endphp
@section('breadcrumb')
  <a href="" class="text-blue-600 no-underline">User</a>
  <span>/</span>
  <span>Log Activity</span>
@endsection

@section('content-module')
  <!-- BEGIN row -->
  <div class="row card rounded">
    <div class="mb-3 text-center card-header">
      <h4>{{ $title ?? '-' }}</h4>
    </div>
    <script type="text/template" id="customAddButtonTemplate">
      <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary mr-3"> <i class="fa fa-plus" style="font-size: 14px; color: white;"></i> Tambah</a>
    </script>
    <table id="datatableDefault" class="table text-nowrap w-100">
      <thead>
        <tr>
          <th>No.</th>
          <th>Username</th>
          <th>Email</th>
          <th>Role</th>
          <th class="text-center">#</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->username ?? '-' }}</td>
            <td>{{ $item->email ?? '-' }}</td>
            <td>{{ $item->roles->role_name ?? '-' }}</td>
            <td class="text-center">
              <a href="{{ route('user.edit', $item->id) }}" style="text-decoration: none;">
                <i class="fa fa-pencil-square" style="font-size: 16px; margin-right:5px; color: blue;"></i>
              </a>
              <a href="{{ route('user.destroy', $item->id) }}" data-confirm-delete="true" style="text-decoration: none;">
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
