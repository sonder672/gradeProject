<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $primaryKey = 'uuid';

    protected $keyType = 'string';

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'uuid',
        'price',
        'stock',
        'hex_cod_color',
        'size_id',
        'customizable_id',
        'category_uuid'
    ];
}
