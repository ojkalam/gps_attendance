<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public fucntion index()
    {
    	return view('staff.home');
    }
}
