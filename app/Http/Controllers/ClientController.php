<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller
{
    public function client(Request $req)
    {
    $client = new Client;
    $client->name=$req->name;
    $client->mobile=$req->mobile;
    $client->address=$req->address;
    $result=$client->save();
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


