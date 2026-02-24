<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    protected $table = 'tenders';

    protected $primaryKey = 'id';

    // Disable Laravel default timestamps
    public $timestamps = false;

    protected $fillable = [
        'title',
        'hindititle',
        'last_date',
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