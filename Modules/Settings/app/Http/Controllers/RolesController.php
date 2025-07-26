<?php

namespace Modules\Settings\Http\Controllers;

use App\Helpers\Fungsi;
use Illuminate\Http\Request;
use Modules\Settings\Models\Menu;
use Illuminate\Support\Facades\DB;
use Modules\Settings\Models\Roles;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Modules\Settings\Http\Requests\RolesRequest;

class RolesController extends Controller
{
  public function index()
  {
    // Fungsi::hakAkses('/bahan');
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $data = Roles::latest()->get();
    $title = 'Data Role Akses';
    return view(
      'settings::roles/index',
      [
        'title' => $title,
        'data' => $data,
      ]
    );
  }
  public function create()
  {
    // Fungsi::hakAkses('/bahan');

    $title = "Tambah Role Akses";
    return view(
      'settings::roles/form',
      [
        'title' => $title,
      ]
    );
  }
  public function edit($id)
  {
    // Fungsi::hakAkses('/bahan');
    $title = "Update Role Akses";
    $data = Roles::findOrFail($id);

    return view(
      'settings::roles/form',
      [
        'title' => $title,
        'data' => $data,

      ]
    );
  }
  public function store(RolesRequest $request)
  {
    // Fungsi::hakAkses('/settings/menu');
    $data = $request->validated();

    if ($request->hasFile('img')) {
      $extension = $request->img->getClientOriginalExtension();
      $newFileName = 'nama_gambar_' . now()->format('YmdHis') . '.' . $extension;
      $request->file('img')->move(public_path('img'), $newFileName);
      $data['img'] = $newFileName;
    }


    if ($request->id) {
      $dataModel = Roles::findOrFail($request->id);
      $data['updated_by'] = Auth::user()->username;
      Fungsi::logModelActivity('Update', $dataModel, $data);
    } else {
      $data['created_by'] = Auth::user()->username;
      Fungsi::logModelActivity('Tambah', new Roles, $data);
    }
    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('roles.index');
  }
  public function destroy($id)
  {
    // Fungsi::hakAkses('/settings/menu');
    $data = Roles::findOrFail($id);
    $data->deleted_by = Auth::user()->username;
    $data->save();
    $data->delete();
    Fungsi::logModelActivity('Hapus', $data);

    Alert::success('Success', 'Data berhasil dihapus!!');
    return redirect()->route('roles.index');
  }
  private function flattenMenuWithIndent($menus, $parentId = null, $level = 0)
  {
    $flat = [];
    foreach ($menus->where('parent_id', $parentId)->sortBy('id') as $menu) {
      $menu->indent_title = str_repeat('&emsp;', $level) . ($level > 0 ? '- ' : '') . $menu->title;
      $flat[] = $menu;
      $flat = array_merge($flat, $this->flattenMenuWithIndent($menus, $menu->id, $level + 1));
    }
    return $flat;
  }

  public function permission($id)
  {
    // Fungsi::hakAkses('/bahan');
    $title = "Update Role Akses";
    $data = Roles::findOrFail($id);
    $data = Roles::with('menus')->findOrFail($id);
    $akses = $data->menus->keyBy('id');

    $allMenus = Menu::orderBy('id')->get();
    $dataMenu = $this->flattenMenuWithIndent($allMenus);

    return view(
      'settings::roles/formPermission',
      [
        'title' => $title,
        'data' => $data,
        'dataMenu' => $dataMenu,
        'akses' => $akses,
      ]
    );
  }
  public function storePermission(Request $request)
  {
    $userLogin = Auth::user();
    $role = Roles::findOrFail($request->id);
    DB::table('role_akses_menus')->where('role_id', $role->id)->delete();

    foreach ($request->akses ?? [] as $menuId => $akses) {
      DB::table('role_akses_menus')->insert([
        'role_id' => $role->id,
        'menu_id' => $menuId,
        'can_create' => isset($akses['create']),
        'can_read' => isset($akses['read']),
        'can_update' => isset($akses['update']),
        'can_delete' => isset($akses['delete']),
        'created_by' => $userLogin->username,
        'updated_by' => $userLogin->username,
        'created_at' => now(),
        'updated_at' => now(),
      ]);
    }

    // Logging
    Fungsi::logModelActivity('Update', $role, ['updated_by' => Auth::user()->username]);

    Alert::success('Success', 'Hak akses berhasil diperbarui');
    return redirect()->route('roles.index');
  }
}
