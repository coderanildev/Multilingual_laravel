<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployeeDesignation extends Model
{
    protected $table = 'employees_designation';

    protected $fillable = [
        'designation',
        'periority',
        'status'
    ];

    public $timestamps = false;

}
?>