<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Newnotification extends Model
{
    protected $table = 'newnotifications';

    protected $primaryKey = 'id';

    public $timestamps = false; // Because you are not using created_at / updated_at

    protected $fillable = [
        'title_hindi',
        'title_english',
        'document',
        'category',
        'added_date',
        'added_by',
        'updated_date',
        'updated_by',
        'status'
    ];

    protected $casts = [
        'added_date' => 'datetime',
        'updated_date' => 'datetime',
        'status' => 'integer',
    ];
}