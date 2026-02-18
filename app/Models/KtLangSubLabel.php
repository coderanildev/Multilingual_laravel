<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KtLangSubLabel extends Model
{
    protected $table = 'kt_lang_sub_label';

    protected $primaryKey = 'kt_lang_label_id';
    
    // Your table has no created_at / updated_at
    public $timestamps = false; 

    protected $fillable = [
        'kt_label_id',
        'kt_lang_id',
        'kt_sub_lang_name',
        'kt_lang_type',
    ];

    protected $casts = [
        'kt_label_id' => 'integer',
        'kt_lang_id' => 'integer',
    ];
}
