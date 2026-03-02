<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table = 'sliders';

    protected $fillable = [
        'small_title',
        'main_title',
        'description',
        'button1_text',
        'button1_link',
        'button2_text',
        'button2_link',
        'image',
        'status',
        'order_by',
    ];

    protected $casts = [
        'status' => 'integer',
        'order_by' => 'integer',
    ];
}
