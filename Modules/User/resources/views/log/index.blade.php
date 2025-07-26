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



    <table id="datatableDefault" class="table text-nowrap w-100">
      <thead>
        <tr>
          <th>No.</th>
          <th>Username</th>
          <th>Activity</th>
          <th class="text-center">Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $item)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->username ?? '-' }}</td>
            <td>{{ $item->activity ?? '-' }}</td>
            <td class="text-center">{{ Fungsi::format_tgl_jam_menit($item->created_at ?? '-') }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
  <!-- END row -->
@endsection
