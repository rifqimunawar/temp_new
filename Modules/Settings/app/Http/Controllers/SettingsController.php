<?php

namespace Modules\Settings\Http\Controllers;

use App\Helpers\Fungsi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Modules\Settings\Http\Requests\SettingsRequest;
use Modules\Settings\Models\settings;
use RealRashid\SweetAlert\Facades\Alert;

class SettingsController extends Controller
{
  public function index()
  {
    // Fungsi::hakAkses('/bahan');
    $title = "General Settings";
    $data = Settings::findOrFail(1)->first();

    return view(
      'settings::settings/form',
      [
        'title' => $title,
        'data' => $data,

      ]
    );
  }

  public function store(SettingsRequest $request)
  {
    $data = $request->validated();
    if ($data['password']) {
      $data['password'] = Hash::make($data['password']);
    } else {
      unset($data['password']);
    }
    unset($data['konfirmasi']);

    if ($request->hasFile('logo')) {
      $extension = $request->file('logo')->getClientOriginalExtension();
      $newFileName = 'logo_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('logo')->move(public_path('img'), $newFileName);
      $data['logo'] = $newFileName;
    }

    if ($request->hasFile('background')) {
      $extension = $request->file('background')->getClientOriginalExtension();
      $newFileName = 'background_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('background')->move(public_path('img'), $newFileName);
      $data['background'] = $newFileName;
    }

    if ($request->id) {
      $dataModel = Settings::findOrFail($request->id);
      $data['updated_by'] = Auth::user()->username;
      Fungsi::logModelActivity('Update', $dataModel, $data);
    } else {
      $data['created_by'] = Auth::user()->username;
      Fungsi::logModelActivity('Tambah', new Settings, $data);
    }
    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('settings.index');
  }
}
