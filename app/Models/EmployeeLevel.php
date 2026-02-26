<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeLevel extends Model
{
    protected $table = 'employees_level';

    protected $fillable = [
        'name',
        'value',
        'status'
    ];

    public $timestamps = false;
}

?>