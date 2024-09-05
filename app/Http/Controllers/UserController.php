<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function main_user(){
        return view ('Users/Home');
    }

    public function site_touristique(){
        return view ('Users/SiteTouristique');
    }
    public function reserver_site_touristique(){
        return view ('Users/ReservesiteTouristique');
    }


    public function historique(){
        return view ('Users/TimelinePage');
    }
    public function Hotels(){
        return view('Users/Hotels');
    }

    public  function showLoginForm()
    {
    return view('login');
    }

    public function showregisterForm()
    {
        return view('register');
    }

//    public function login(Request $request)
//    {
////        $request->validate([
////            'email' => 'required|email',
////            'password' => 'required',
////        ]);
//
//        $response = Http::post('{$appUrl}/api/login', [
//            'email' => request('email'),
//            'password' => request('password'),
//        ]);
//
//        if ($response->successful()) {
//            $token = $response->json('token');
//
//            // Stocker le token dans la session ou le stockage local
//            session(['api_token' => $token]);
//
//            return redirect('accuiel'); // Rediriger vers la page d'accueil
//        }
//
//        return back()->withErrors(['email' => 'Invalid credentials']);
//        return redirect('register');
//    }
//
//
//    public function register(Request $request)
//    {
//
//        $request->validate([
//            'name'=> 'required|string',
//            'email' => 'required|email|unique:users,email',
//            'password' => 'required|string',
//            'phone_number' => 'required|string',
//        ]);
//
//
//
//        $response = Http::post('http://127.0.0.1:8000/api/register', [
////            'name' => $request->name,
////            'phone_number' => $request->phone_number,
////            'email' => $request->email,
////            'password' => $request->password,
//        ]);
//
//        dd($response);
//
//        if ($response->successful()) {
//
//            return redirect('login'); // Rediriger vers la page login
//        }
//
//        $errors ='';
//        return redirect('register')->withErrors(['email'=>"email or password invalide"]);
//    }
//
//
//
//    public function logout(Request $request)
//    {
//        $token = $request->session()->get('api_token');
//
//        if ($token) {
//            Http::withToken($token)->post('http://localhost:8000/api/logout');
//            $request->session()->forget('api_token');
//        }
//
//        return redirect('/login');
//    }





}
