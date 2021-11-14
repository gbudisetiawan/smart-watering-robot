<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardCont extends Controller
{
    public function dashboard(){
        return view('dashboard');
    }
}
