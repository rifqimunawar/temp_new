<?php
namespace App\Helpers;

use DateTime;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Modules\Settings\Models\Menu;
use Modules\User\Models\LogActvities;

class Fungsi
{
  public static function logModelActivity(string $action, $modelInstance, array $data = [])
  {
    $user = Auth::user();
    $changes = [];
    $original = $modelInstance->exists ? $modelInstance->getOriginal() : [];
    $modelClass = get_class($modelInstance);
    $modelId = $modelInstance->id ?? null;
    if ($action === 'Tambah') {
      $modelInstance = $modelInstance::create($data);
      $modelId = $modelInstance->id;
      foreach ($modelInstance->getChanges() as $key => $value) {
        $changes[$key] = ['from' => null, 'to' => $value];
      }
    } elseif ($action === 'Update') {
      $modelInstance->update($data);
      foreach ($modelInstance->getChanges() as $key => $value) {
        $changes[$key] = [
          'from' => $original[$key] ?? null,
          'to' => $value
        ];
      }
    } elseif ($action === 'Hapus') {
      $changes = $original;
      $modelInstance->delete();
    }
    LogActvities::create([
      'user_id' => $user?->id ?? 0,
      'username' => $user?->username ?? 'guest',
      'activity' => "$action " . class_basename($modelInstance),
      'model_type' => $modelClass,
      'model_id' => $modelId,
      'changes' => $changes ? json_encode($changes, JSON_PRETTY_PRINT) : null,
      'ip_address' => request()->ip(),
      'user_agent' => request()->userAgent(),
    ]);

    return $modelInstance;
  }
  public static function hakAksesRead($url)
  {
    $userLogin = Auth::user();
    $menu = Menu::where('url', 'LIKE', $url . '%')->first();
    $akses = $userLogin->roles->menus()
      ->where('menu_id', $menu->id)
      ->wherePivot('can_read', true)
      ->exists();
    if (!$akses) {
      abort(403, 'Akses ditolak: anda tidak memiliki izin melihat data.');
    }
    return true;
  }
  public static function hakAksesCreateEdit($url)
  {
    $userLogin = Auth::user();
    $menu = Menu::where('url', 'LIKE', $url . '%')->first();
    $akses = $userLogin->roles->menus()
      ->where('menu_id', $menu->id)
      ->wherePivot('can_create', true)
      ->exists();
    if (!$akses) {
      abort(403, 'Akses ditolak: anda tidak memiliki izin mengupdate data.');
    }
    return true;
  }
  public static function hakAksesStore($url)
  {
    $userLogin = Auth::user();
    $menu = Menu::where('url', 'LIKE', $url . '%')->first();
    $akses = $userLogin->roles->menus()
      ->where('menu_id', $menu->id)
      ->wherePivot('can_update', true)
      ->exists();
    if (!$akses) {
      abort(403, 'Akses ditolak: tidak memiliki mengupdate data.');
    }
    return true;
  }
  public static function hakAksesDelete($url)
  {
    $userLogin = Auth::user();
    $menu = Menu::where('url', 'LIKE', $url . '%')->first();
    $akses = $userLogin->roles->menus()
      ->where('menu_id', $menu->id)
      ->wherePivot('can_delete', true)
      ->exists();
    if (!$akses) {
      abort(403, 'Akses ditolak: tidak memiliki izin menghapus data.');
    }
    return true;
  }
  public static function usia($tgl_lahir)
  {
    $tanggal_lahir = new DateTime($tgl_lahir);
    $hari_ini = new DateTime();
    $usia = $tanggal_lahir->diff($hari_ini);

    return "{$usia->y} tahun {$usia->m} bulan {$usia->d} hari";
  }
  public static function usiaTahun($tgl_lahir)
  {
    $tanggal_lahir = new DateTime($tgl_lahir);
    $hari_ini = new DateTime();
    $usia = $tanggal_lahir->diff($hari_ini);

    return "{$usia->y} thn";
  }

  public static function rupiah($angka)
  {
    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
  }

  // Fungsi untuk mendapatkan nama hari dalam seminggu
  public static function format_tgl($tgl)
  {
    $hari = Carbon::parse($tgl)->locale('id')->isoFormat('dddd');
    $tanggal = Carbon::parse($tgl)->locale('id')->isoFormat('D');
    $bulan = Carbon::parse($tgl)->locale('id')->isoFormat('MMMM');
    $tahun = Carbon::parse($tgl)->locale('id')->isoFormat('YYYY');

    return $hari . ', ' . $tanggal . ' ' . $bulan . ' ' . $tahun;
  }
  public static function format_tgl_jam_menit($tgl)
  {
    $dt = Carbon::parse($tgl)->locale('id');

    $hari = $dt->isoFormat('dddd');
    $tanggal = $dt->isoFormat('D');
    $bulan = $dt->isoFormat('MMMM');
    $tahun = $dt->isoFormat('YYYY');
    $jamMenit = $dt->format('H:i');

    return $hari . ', ' . $tanggal . ' ' . $bulan . ' ' . $tahun . ' Jam ' . $jamMenit . ' WIB';
  }

}
