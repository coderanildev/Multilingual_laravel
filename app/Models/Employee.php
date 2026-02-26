<?php 
namespace App\Models;
use App\Models\EmployeeDesignation;
use App\Models\EmployeeLevel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Employee extends Model
{
    protected $table = 'employees';

   protected $fillable = [
        'name',
        'slug',
        'photo',
        'designation',
        'desination_value', 
        'level',               
        'qualification',
        'area_of_interest',
        'phone_no',
        'email',
        'username',
        'password',
        'details',
        'resume',
        'employee_type',
        'periority',
        'added_date',
        'added_by',
        'updated_date',
        'updated_by',
        'status'
    ];
    public $timestamps = false;

    public function designationOfEmployee()
    {
        return $this->belongsTo(EmployeeDesignation::class, 'desination_value', 'id');
    }

    public function levelOfEmployee()
    {
        return $this->belongsTo(EmployeeLevel::class, 'level', 'id');
    }
}

?>