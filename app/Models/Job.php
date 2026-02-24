<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';

    protected $primaryKey = 'id';

    public $timestamps = false;

    protected $fillable = [
        'title',
        'hindititle',
        'document',
        'added_by',
        'added_date',
        'updated_by',
        'updated_date',
        'status'
    ];

    protected $casts = [
        'added_date' => 'datetime',
        'updated_date' => 'datetime',
        'status' => 'integer',
    ];
}