<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "Employee";
    protected $primaryKey = "EmployeeId";
    public $timestamps = false;
}
