<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHotelController extends Controller
{
    public function index(){
        return view('Structures.AdminHotels');
    }
}
