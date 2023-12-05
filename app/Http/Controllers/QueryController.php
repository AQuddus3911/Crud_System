<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class QueryController extends Controller
{
    public function query()
    {
       $users= DB::table('users')->get();
       return $users;
      //dd($users);
    }
}
