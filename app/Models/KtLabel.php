<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KtLabel extends Model
{
    protected $table = 'kt_label';

    protected $primaryKey = 'kt_label_id';

    public $timestamps = false; // because table has no created_at & updated_at

    protected $fillable = [
        'kt_label_name',
        'kt_label_value',
        'kt_field_type'
    ];
}
