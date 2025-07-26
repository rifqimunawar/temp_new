<?php

namespace Modules\Settings\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Modules\Settings\Database\Factories\MenuFactory;

class Menu extends Model
{
  use HasFactory, SoftDeletes;
  protected $guarded = [];

  public function roles()
  {
    return $this->belongsToMany(Roles::class, 'role_akses_menus', 'menu_id', 'role_id')
      ->withPivot(['can_create', 'can_read', 'can_update', 'can_delete'])
      ->withTimestamps();
  }

}
