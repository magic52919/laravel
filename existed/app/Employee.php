<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = "employees";
    protected $primaryKey = 'employeeId';

    function department() {
        //多對一 多個成員在哪個部門
        return $this->hasOne(Department::class, 'departmentId');
    }
}
