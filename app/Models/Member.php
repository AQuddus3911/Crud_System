<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
class Member extends Model
{
   //protected $primarykey = "members_id";
    public function groups()
    {
        return $this->hasone(\App\Models\Group::class, 'group_id', 'group_id');
       
    }
    public function admin()
    {
       return $this->hasoneThrough(\App\Models\Admin::class,Member::class);
    }
}
