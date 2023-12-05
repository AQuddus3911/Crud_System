<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formdata;

class FormController extends Controller
{
    public function submitForm(Request $req)
    {
        $formdata = new Formdata;
        $formdata->name=$req->name;
        $formdata->password=$req->password;
        $formdata->technology=$req->technology;
        $result=$formdata->save();
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
