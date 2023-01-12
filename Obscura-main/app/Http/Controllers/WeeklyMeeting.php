<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeeklyMeeting extends Controller
{
    public function index(){
        return view('obscura.page.meeting',['title' => 'OBSCURA']);
    }
}
