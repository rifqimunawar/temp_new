<?php

namespace Modules\Settings\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Settings\Database\Factories\RolesFactory;

class Roles extends Model
{
  use HasFactory, SoftDeletes;
  protected $guarded = [];

  public function menus()
  {
    return $this->belongsToMany(Menu::class, 'role_akses_menus', 'role_id', 'menu_id')
      ->withPivot(['can_create', 'can_read', 'can_update', 'can_delete'])
      ->withTimestamps();
  }
}
