<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class municipality extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'department_id'
    ];
}
