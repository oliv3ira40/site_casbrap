<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    protected $fillable = [
        'uf',
        'name',
    ];
}
