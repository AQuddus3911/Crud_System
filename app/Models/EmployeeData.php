<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeData extends Model
{
    protected $table = 'employeedata';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'address', 'mobile'];
    use HasFactory;
}
