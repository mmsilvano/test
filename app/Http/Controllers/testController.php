<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function testEvent(Request $request){
        event(new \App\Events\testEvent("New Announcement"));
    }
}
