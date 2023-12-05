<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Admin;
//use App\Models\Owner;
//use App\Models\Mechanic;
class IndexController extends Controller
{
    public function index()
    {
       echo 'abshs==============================';
    // return Mechanic::with('owner')->get();
       
      return Member::with('groups')->get();
    } 
     public function show($id)
     {
        $owner = Mechanic::get()->owner;
        return $owner;
      
     }
    /* public function show($id)
     {
         $mechanic = Mechanic::find($id);
     
         if ($mechanic !== null) {
             $owner = $mechanic->owner;
             return $owner;
         } else {
             // Mechanic with the given $id was not found
             return "Mechanic not found";
         }
     }*/
     
  }
    
   

  