<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model {
    use SoftDeletes;
    protected $table = 'tb_permission';
    protected $guarded = [];
}
