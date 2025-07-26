<?php

namespace Modules\User\Http\Controllers;

use App\Helpers\Fungsi;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Settings\Models\Roles;
use Modules\User\Http\Requests\UserRequest;
use Modules\User\Models\LogActvities;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
  public function log()
  {
    Fungsi::hakAksesRead('/users/log');
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $data = LogActvities::latest()->get();
    $title = 'Data Role Akses';
    return view(
      'user::log/index',
      [
        'title' => $title,
        'data' => $data,
      ]
    );
  }

  public function index()
  {
    Fungsi::hakAksesRead('/users/data');
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $data = User::with('roles')->latest()->get();
    $title = 'Data User';
    return view(
      'user::users/index',
      [
        'title' => $title,
        'data' => $data,
      ]
    );
  }
  public function create()
  {
    Fungsi::hakAksesCreateEdit('/users/data');

    $dataRole = Roles::latest()->get();
    $title = "Tambah User";
    return view(
      'user::users/form',
      [
        'title' => $title,
        'dataRole' => $dataRole,
      ]
    );
  }
  public function edit($id)
  {
    Fungsi::hakAksesCreateEdit('/users/data');
    $title = "Update Data User";
    $data = User::findOrFail($id);
    $dataRole = Roles::latest()->get();


    return view(
      'user::users/form',
      [
        'title' => $title,
        'data' => $data,
        'dataRole' => $dataRole,
      ]
    );
  }
  public function store(UserRequest $request)
  {
    Fungsi::hakAksesStore('/users/data');
    $data = $request->validated();

    if ($request->hasFile('img')) {
      $extension = $request->img->getClientOriginalExtension();
      $newFileName = 'nama_gambar_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }
    if ($request->filled('password')) {
      $data['password'] = Hash::make($request->password);
    } else {
      unset($data['password']);
    }
    if ($request->id) {
      $dataModel = User::findOrFail($request->id);
      $data['updated_by'] = Auth::user()->username;
      Fungsi::logModelActivity('Update', $dataModel, $data);
    } else {
      $data['created_by'] = Auth::user()->username;
      Fungsi::logModelActivity('Tambah', new User, $data);
    }
    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('user.index');
  }
  public function destroy($id)
  {
    Fungsi::hakAksesDelete('/users/data');
    $data = User::findOrFail($id);
    $data->deleted_by = Auth::user()->username;
    $data->save();
    $data->delete();
    Fungsi::logModelActivity('Hapus', $data);

    Alert::success('Success', 'Data berhasil dihapus!!');
    return redirect()->route('user.index');
  }
}
