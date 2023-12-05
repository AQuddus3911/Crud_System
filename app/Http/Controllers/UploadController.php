<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $req)
    {
       // echo "<pre>";
       $filename = time()."images"; 
      // $req->file('image')->getclientoriginalextension();
        echo $req->file('image')->storeas('public/uploads',$filename);

    }
    
}
