<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Mechanic extends Model
{

  protected $primaryKey = 'mechanic_id';

   /* public function car()
    {
        return $this->hasone(\App\Models\Car::class, 'car_id', 'car_id');
       
    }
    public function owner()
    {
       return $this->hasoneThrough(\App\Models\Owner::class,Mechanic::class);
    }*/
  public function car()
    {
        return $this->hasOne( Car::class);
    }
    public function owner()
    {
        return $this->hasOneThrough(Owner::class, Car::class);
    }
      // return $this->through('car')->has('owner');
}
