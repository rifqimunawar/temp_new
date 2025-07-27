<?php

namespace Modules\Profile\Http\Controllers;

use App\Models\User;
use App\Helpers\Fungsi;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Modules\Settings\Models\Roles;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\User\Models\LogActvities;
use RealRashid\SweetAlert\Facades\Alert;
use Modules\Profile\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
  public function index()
  {
    $userLogin = Auth::user();
    $dataActivity = LogActvities::where('user_id', $userLogin->id)->latest()->get();
    $data = User::findOrFail($userLogin->id);
    $dataRole = Roles::all();

    //  session aktif dalam 5 menit terakhir
    $activeSessionUserIds = DB::table('sessions')
      ->where('last_activity', '>=', Carbon::now()->subMinutes(5)->timestamp)
      ->whereNotNull('user_id')
      ->pluck('user_id')
      ->unique()
      ->toArray();

    $users = User::all()->map(function ($user) use ($activeSessionUserIds) {
      $user->is_online = in_array($user->id, $activeSessionUserIds);
      return $user;
    })->sortByDesc('is_online');

    return view(
      'profile::profile.index',
      [
        'dataActivity' => $dataActivity,
        'data' => $data,
        'roles' => $dataRole,
        'activeUsers' => $users,
      ]
    );
  }

  public function store(ProfileRequest $request)
  {
    $data = $request->validated();

    // Handle file upload
    if ($request->hasFile('img')) {
      $extension = $request->file('img')->getClientOriginalExtension();
      $newFileName = 'img_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }

    // Jika update
    if ($request->id) {
      $dataModel = User::findOrFail($request->id);

      // Jangan update password jika kosong
      if (!empty($data['password'])) {
        $data['password'] = Hash::make($data['password']);
      } else {
        unset($data['password']);
      }

      unset($data['konfirmasi']); // Jangan disimpan

      $data['updated_by'] = Auth::user()->username;
      $dataModel->update($data);
      Fungsi::logModelActivity('Update', $dataModel, $data);
    } else {
      // Buat user baru
      $data['password'] = Hash::make($data['password']);
      unset($data['konfirmasi']);

      $data['created_by'] = Auth::user()->username;
      User::create($data);
      Fungsi::logModelActivity('Tambah', new User, $data);
    }

    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('profile.index');
  }

}
