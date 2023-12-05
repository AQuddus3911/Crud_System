<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeData;

class APIController extends Controller
{
    public function add(Request $req)
     {
        
        $employeedata = new EmployeeData;
        $employeedata->name=$req->name;
        $employeedata->address=$req->address;
        $employeedata->mobile=$req->mobile;
        $result=$employeedata->save();
        if($result)
        {
            return ('Data is saved');
        }
        else
        {
            return ('Failed');
        }
        
      //  $create = 'nexius' ; 
      //  return ($create);

   }
    
        
        
    
}
