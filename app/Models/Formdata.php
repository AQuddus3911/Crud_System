<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formdata extends Model
{
    protected $table = 'formdata';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'password', 'technology'];
    use HasFactory;
}
