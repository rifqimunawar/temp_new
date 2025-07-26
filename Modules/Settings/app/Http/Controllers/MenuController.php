<?php

namespace Modules\Settings\Http\Controllers;

use App\Helpers\Fungsi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Settings\Http\Requests\MenuRequest;
use Modules\Settings\Models\Menu;
use RealRashid\SweetAlert\Facades\Alert;

class MenuController extends Controller
{
  public function index()
  {
    // Fungsi::hakAkses('/bahan');
    $alert = 'Delete Data!';
    $text = "Are you sure you want to delete?";
    confirmDelete($alert, $text);

    $allMenus = Menu::orderBy('id')->get();
    $dataMenu = $this->flattenMenuWithIndent($allMenus);
    $title = 'Data Menu';
    return view(
      'settings::menu/index',
      [
        'title' => $title,
        'data' => $dataMenu,
      ]
    );
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
  public function create()
  {
    // Fungsi::hakAkses('/bahan');
    $allMenus = Menu::orderBy('id')->get();
    $dataMenu = $this->flattenMenuWithIndent($allMenus);

    $title = "Tambah Menu";
    return view(
      'settings::menu/form',
      [
        'title' => $title,
        'dataMenu' => $dataMenu,
      ]
    );
  }
  public function edit($id)
  {
    // Fungsi::hakAkses('/bahan');
    $title = "Update Bahan Produk";
    $data = Menu::findOrFail($id);
    $dataMenu = Menu::all();


    return view(
      'settings::menu/form',
      [
        'title' => $title,
        'data' => $data,
        'dataMenu' => $dataMenu,

      ]
    );
  }
  public function store(MenuRequest $request)
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
      $dataModel = Menu::findOrFail($request->id);
      $data['updated_by'] = Auth::user()->username;
      Fungsi::logModelActivity('Update', $dataModel, $data);
    } else {
      $data['created_by'] = Auth::user()->username;
      Fungsi::logModelActivity('Tambah', new Menu, $data);
    }
    Alert::success('Success', 'Data berhasil ' . (!empty($request->id) ? 'diupdate' : 'disimpan'));
    return redirect()->route('menu.index');
  }
  public function destroy($id)
  {
    // Fungsi::hakAkses('/settings/menu');
    $data = Menu::findOrFail($id);
    $data->deleted_by = Auth::user()->name;
    $data->save();
    $data->delete();
    Fungsi::logModelActivity('Hapus', $data);

    Alert::success('Success', 'Data berhasil dihapus!!');
    return redirect()->route('menu.index');
  }
}
