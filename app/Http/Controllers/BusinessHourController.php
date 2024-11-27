<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessHourController extends Controller
{
    public function index(){
        return view('appointments.business_hours');
    }
}
