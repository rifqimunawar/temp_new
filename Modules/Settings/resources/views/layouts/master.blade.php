{{-- layouts/app.blade.php --}}
@extends('layouts.app')

@section('title', 'Settings')

@section('content')
  <div id="content" class="app-content">

    <nav class="text-sm text-gray-600 mb-4" aria-label="breadcrumb">
      <ol class="list-reset flex items-center space-x-2">
        @yield('breadcrumb')
      </ol>
    </nav>

    @yield('content-module')
  </div>
@endsection
