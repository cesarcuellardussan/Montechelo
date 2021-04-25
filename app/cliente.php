<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'cliente';

    protected $fillable = [
        'identificacion',
        'texto'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
