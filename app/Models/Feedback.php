<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks';

    protected $primaryKey = 'id';

    public $timestamps = false; // because table uses 'datetime' instead of created_at & updated_at

    protected $fillable = [
        'name',
        'email',
        'organisation',
        'department',
        'designation',
        'subject',
        'feedback',
        'datetime',
        'attachment',
        'ipaddress'
    ];
}