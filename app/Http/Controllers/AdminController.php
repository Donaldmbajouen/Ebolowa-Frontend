<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('Admin/dashboard');
    }
    public function hotels(){
        return view('Admin/Hotels/hotels');
    }
    public function SiteT(){
        return view('Admin/SiteT/SiteT');
    }
    public function AjouterSiteT(){
        return view('Admin/SiteT/AjoutSiteT');
    }



}
