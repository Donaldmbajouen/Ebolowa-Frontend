<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
$appUrl = env('APP_URL');

class UserController extends Controller
{

    public function main_user(){
        session(['tata' => 'toto']);
        return view ('Users/Home');
    }

    public function site_touristique(){
        return view ('Users/SiteTouristique');
    }
    public function reserver_site_touristique(){
        return view ('Users/ReservesiteTouristique');
    }


    public function historique(){
        // dd(Session::get('access_token'));
        return view ('Users/TimelinePage');
    }
    public function Hotels(){

        // dd(Session::get('access_token'), session('access_token'));
        return view('Users/Hotels');
    }

    public  function showLoginForm()
    {
        // Session::put('access_token', "tata");
    return view('login');
    }

    public function showregisterForm()
    {
        return view('register');
    }

   public function login(Request $request)
   {
    $appUrl = env('APP_URL');

       $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
       $response = Http::post("{$appUrl}/api/login", [
           'email' => request('email'),
           'password' => request('password'),
       ]);

       if ($response->successful()) {
           $token = $response->json('access_token');

           // Stocker le token dans la session ou le stockage local
           Session::put('access_token', $token);
        //    $request->session()->put('access_token', $token);
        //    session(['access_token' => $token]);
           $user = $response->json('user');
           Session::put('user', $user);
        //    session(['user' => $user]);
            // dd($user['role']);
            if($user['role'] === "admin_principal"){
                return redirect('/admin');
            }

           return redirect('/'); // Rediriger vers la page d'accueil
       }
       return back()->withErrors(['email' => 'Invalid credentials']);
   }


   public function register(Request $request)
   {

    $appUrl = env('APP_URL');
       $request->validate([
           'name'=> 'required|string',
           'email' => 'required|email|unique:users,email',
           'password' => 'required|string',
           'phone_number' => 'required|string',
       ]);
       $response = Http::post("{$appUrl}/api/register", [
           'name' => $request->name,
           'phone_number' => $request->phone_number,
           'email' => $request->email,
           'password' => $request->password,
       ]);
       if ($response->successful()) {
           return redirect('login')->with('success', 'Compte cree avec succes! Veuillez vous connecter a votre Compte !');
       }
       $errors ='';
       return redirect('register')->with(['error', "email or password invalide"]);
   }



   public function logout(Request $request)
   {
        $appUrl = env('APP_URL');
       $token = $request->session()->get('api_token');

       if ($token) {
           Http::withToken($token)->post("{$appUrl}/api/logout");

           if ($response->successful()) {
            // Vider la session après une déconnexion réussie
            // $request->session()->forget('api_token');
            session()->flush();

            // Rediriger vers la page de connexion avec un message de succès
            return redirect()->route('login')->with('success', 'Déconnexion réussie.');
        } else {
            // Gérer les erreurs de l'API
            return redirect()->back()->with('error', 'Erreur lors de la déconnexion.');
        }
       }
    //    Si aucun token, rediriger sans déconnexion
       return redirect('/login');
   }

}
