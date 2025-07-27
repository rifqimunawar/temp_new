@extends('settings::layouts.master')
@php
  use App\Helpers\Fungsi;
  use app\Helpers\GetSettings;
@endphp
@section('breadcrumb')
@endsection

@section('content-module')
  <!-- BEGIN row -->
  <div class="row rounded">
    <div class="mb-3 text-center card-header">
      <h4>{{ $title ?? '-' }}</h4>
    </div>
    <div class="profile">
      <!-- BEGIN profile-header -->
      <div class="profile-header">
        <div class="profile-header-cover"></div>

        <div class="profile-header-content">
          <div class="profile-header-img">
            <img src="assets/img/user/profile.jpg" alt="">
          </div>
          <ul class="profile-header-tab nav nav-tabs nav-tabs-v2">
            <div>
              <h4 class="mt-2">John Smith</h4>
              <div class="fw-500 mb-3 text-muted mt-n2">@johnsmith</div>
            </div>
          </ul>
        </div>
      </div>
      <!-- END profile-header -->

      <!-- BEGIN profile-container -->
      <div class="profile-container">
        <!-- BEGIN profile-sidebar -->
        <div class="profile-sidebar">
          <div class="desktop-sticky-top">
            <!-- profile info -->
            {{-- <h4>John Smith</h4>
            <div class="fw-500 mb-3 text-muted mt-n2">@johnsmith</div> --}}

            <hr class="mt-4 mb-4">

            <!-- people-to-follow -->
            <div class="fw-500 mb-3 fs-16px">User Online</div>

            @foreach ($activeUsers as $item)
              <div class="d-flex align-items-center mb-3 position-relative">
                <div class="position-relative me-2">
                  <img src="assets/img/user/user-1.jpg" alt="" width="30" class="rounded-circle">

                  {{-- Tompel hijau hanya jika online --}}
                  @if ($item->is_online)
                    <span
                      class="position-absolute bottom-0 end-0 translate-middle p-1 bg-success border border-white rounded-circle"
                      style="width: 10px; height: 10px; margin-bottom: -5px; margin-right: -5px"></span>
                  @endif
                </div>

                <div class="flex-fill px-2">
                  <div class="fw-500 text-truncate w-100px">{{ $item->username ?? '' }}</div>
                  <div class="fs-12px text-body text-opacity-50">
                    {{ $item->is_online ? 'Online' : 'Offline' }}
                  </div>
                </div>
              </div>
            @endforeach



          </div>
        </div>
        <!-- END profile-sidebar -->

        <!-- BEGIN profile-content -->
        <div class="profile-content">
          <div class="row">
            <div class="col-xl-8">
              <div class="tab-content p-0">
                <!-- BEGIN tab-pane -->
                <div class="tab-pane fade show active" id="profile-post">
                  <div class="card mb-3">
                    <div class="card-body">
                      <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ old('id', $data->id ?? '') }}">

                        {{-- Username --}}
                        <div class="mb-3">
                          <label for="username" class="form-label">Username</label>
                          <input type="text" name="username" id="username"
                            class="form-control @error('username') is-invalid @enderror"
                            value="{{ old('username', $data->username ?? '') }}" required>
                          @error('username')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        {{-- Email --}}
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="email" name="email" id="email"
                            class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $data->email ?? '') }}" required>
                          @error('email')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        {{-- Role --}}
                        <div class="mb-3">
                          <label for="role_id" class="form-label">Role</label>
                          <input type="hidden" name="role_id" value="{{ $data->role_id }}">
                          <select name="role_id" disabled id="role_id"
                            class="form-control @error('role_id') is-invalid @enderror" required>
                            <option value="">-- Pilih Role --</option>
                            @foreach ($roles as $role)
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

                        {{-- Gambar / Foto --}}
                        <div class="mb-3">
                          <label for="img" class="form-label">Foto</label>
                          <input type="file" name="img" id="img"
                            class="form-control @error('img') is-invalid @enderror" accept="image/*"
                            onchange="previewImage(event)">
                          @error('img')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                          @enderror

                          {{-- Preview Gambar --}}
                          <div class="mt-3">
                            <img id="img-preview" src="{{ isset($data->img) ? asset('img/' . $data->img) : '#' }}"
                              alt="Preview" class="img-thumbnail"
                              style="max-height: 200px; {{ isset($data->img) ? '' : 'display: none;' }}">
                          </div>
                        </div>


                        {{-- Password --}}
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" name="password" id="password"
                            class="form-control @error('password') is-invalid @enderror"
                            {{ isset($data) ? '' : 'required' }}>
                          @error('password')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        {{-- Konfirmasi Password --}}
                        <div class="mb-3">
                          <label for="konfirmasi" class="form-label">Konfirmasi Password</label>
                          <input type="password" name="konfirmasi" id="konfirmasi"
                            class="form-control @error('konfirmasi') is-invalid @enderror"
                            {{ isset($data) ? '' : 'required' }}>
                          @error('konfirmasi')
                            <div class="invalid-feedback text-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>

                    </div>
                  </div>
                </div>
                <!-- END tab-pane -->
              </div>
            </div>
            <div class="col-xl-4">
              <div class="desktop-sticky-top d-none d-lg-block">
                <div class="card mb-3">
                  <div class="list-group list-group-flush">
                    <div class="list-group-item fw-500 px-3 d-flex">
                      <span class="flex-fill">Your Activity</span>
                      <a href="#" class="text-muted"><i class="fa fa-cog"></i></a>
                    </div>
                    <div class="list-group-item px-3">
                      @foreach ($dataActivity->take(6) as $item)
                        <div class="text-muted"><small><strong>{{ $item->activity ?? '-' }}</strong></small></div>
                        <div><small
                            class="text-muted">{{ Fungsi::format_tgl_jam_menit($item->created_at ?? '') }}</small></div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END profile-content -->
      </div>
      <!-- END profile-container -->
    </div>

  </div>
  <!-- END row -->
  <script>
    function previewImage(event) {
      const reader = new FileReader();
      reader.onload = function() {
        const output = document.getElementById('img-preview');
        output.src = reader.result;
        output.style.display = 'block';
      };
      reader.readAsDataURL(event.target.files[0]);
    }
  </script>
@endsection
