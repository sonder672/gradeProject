<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_permission extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'role_uuid',
        'permission_uuid'
    ];
}
