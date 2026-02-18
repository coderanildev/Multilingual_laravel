<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LangVisitor extends Model
{
    protected $table = 'langvisitors';

    public $timestamps = false; 

    protected $fillable = [
        'ipaddress',
        'url',
        'language',
        'datetime',
        'status'
    ];
}
