<?php

namespace Modules\Settings\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Settings\Database\Factories\RoleAksesMenuFactory;

class RoleAksesMenu extends Model
{
  use HasFactory, SoftDeletes;
  protected $guarded = [];
}
