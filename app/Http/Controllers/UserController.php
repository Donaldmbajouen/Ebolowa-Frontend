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
        return view ('Users/Home');
    }

    public function site_touristique(){
        $appUrl= env('APP_URL');
        //
        $response=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->get("{$appUrl}/api/admin/SiteTouristique");
        if($response->successful()){
            $Sites = $response->json();
            foreach ($Sites as $site) {
                if ($site['statut'] === 1) {
                    $SitesActifs[] = $site; // Ajoutez l'hotle actif au tableau
                }
            }
            return view ('Users/SiteTouristique', compact('SitesActifs', 'appUrl'));
        }
    }
    public function reserver_site_touristique(){
        return view ('Users/ReservesiteTouristique');
    }


    public function historique(){
        // dd(Session::get('access_token'));
        return view ('Users/TimelinePage');
    }
    public function Hotels(){
        $appUrl= env('APP_URL');

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->get("{$appUrl}/api/admin/hotel");
        if($response->successful()){
            $hotels = $response->json();
            foreach ($hotels as $hotel) {
                if ($hotel['statut'] == 1) {
                    $hotelsActifs[] = $hotel; // Ajoutez l'hotle actif au tableau
                }
            }
            return view('Users/Hotels', compact('hotelsActifs', 'appUrl'));
        }

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
           $user = $response->json('user');
           Session::put('user', $user);
            if($user['role'] === "admin_principal"){
                return redirect('/admin');
            }
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

   public function pieces($hotel_id){
        $token = session('access_token');
        $appUrl= env('APP_URL');
        $response1=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/admin/hotel/$hotel_id");

        if ($response1->successful()) {
            $hotel = $response1->json();
            $response2=Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/hotel/$hotel_id/pieces");
            if ($response2->successful()) {
                $pieces = $response2->json();
                // dd($pieces);
                if($pieces == null){
                    return("pas de chambres disponibles pour le moment");
                } else{
                    return view('Users.Pieces', compact('pieces', 'hotel', 'appUrl'));
                }
            }
        }
   }



   public function logout(Request $request)
   {
        $appUrl = env('APP_URL');
        $token = $request->session()->get('api_token');
        dd($token);
        $response=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->post("{$appUrl}/api/logout");
            dd($response->body());
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
    //    Si aucun token, rediriger sans déconnexion

   }

   public function reservation(){
    return view('Users.reservations');
   }
   public function dashboard(){
    return view('Users.UserBoard');
   }
   public function map( $hotel_id){
    $token = session('access_token');
    $appUrl= env('APP_URL');
    $response1=Http::withHeaders([
        'Content-Type' => 'application/json',
        'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/admin/hotel/$hotel_id");
    if ($response1->successful()) {
        $hotel = $response1->json();
        return view('Users.localisation', compact('hotel'));
    }

   }

}
