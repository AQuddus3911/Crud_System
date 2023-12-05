<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
   //  protected $primarykey ="group_id"; 
   public function members()
    {
        return $this->belongsTo(\App\Models\Member::class);
       
    }
}
