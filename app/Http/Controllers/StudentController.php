<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function student(Request $req)
    {
    $student = new Student;
    $student->name=$req->name;
    $student->mobile=$req->mobile;
    $student->address=$req->address;
    $result=$student->save();
    if($result)
    {
        return ('Data is saved');
    }
    else
    {
        return ('Failed');
    }


  //  return response()->json(['message' => 'Form submitted successfully']);
}
}

