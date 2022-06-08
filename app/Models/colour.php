<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colour extends Model
{
    use HasFactory;

    protected $primaryKey = 'hex_code';

    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'hex_code',
        'name'
    ];
}
