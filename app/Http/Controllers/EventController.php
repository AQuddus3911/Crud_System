<?php

namespace App\Http\Controllers;
use App\Events\UserCreated;
use App\Listener\SendEmail;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        event(new usercreated("email send on your address"));
        
        
    }
}
