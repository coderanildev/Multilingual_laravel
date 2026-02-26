<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WhatsNew extends Model
{
    protected $table = 'whatsnew'; // change if your table name is different

    public $timestamps = false; // because you are not using created_at & updated_at

    protected $fillable = [
        'content_hindi',
        'content_english',
        'category',
        'status',
        'added_date',
        'added_by',
        'updated_date',
        'updated_by',
    ];
}