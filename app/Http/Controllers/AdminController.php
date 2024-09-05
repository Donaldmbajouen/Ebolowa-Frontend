<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Admin/dashboard');
    }
    public function structures(){
        return view('Admin/structures');
    }
    public function AjouterHotels(){
        return view('Admin/AjoutHotel');
    }


}
