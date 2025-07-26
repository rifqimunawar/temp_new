<?php

namespace Modules\User\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

// use Modules\User\Database\Factories\LogActvitiesFactory;

class LogActvities extends Model
{
  use HasFactory, SoftDeletes;

  protected $guarded = [];
}
