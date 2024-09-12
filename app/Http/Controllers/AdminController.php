<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function hotels(){
        return view('Admin/Hotels/hotels');
    }
    public function dashboard(){
        return view('Admin/dashboard');
    }
    //les fonctions du site touristiques ici
    public function index(){ // fonction index
            $appUrl= env('APP_URL');
            $token = session('access_token');
            $response = Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/admin/SiteTouristique");
            if($response->successful()){
                $sites = $response->json();
                return view ('Admin/SiteT/SiteT', compact('sites'));
            }
    }

    public function AjouterSiteT(){

        $token = session('access_token');
        $response = Http::withToken($token)->get('http://127.0.0.1:8000/api/admin/user/filtre');
        $adminNames = [];

        // Vérifiez si la requête a réussi
        if ($response->successful()) {
            $adminNames = $response->json(); // Récupérer les noms sous forme de tableau associatif
        } else {
            $adminNames = []; // Aucun admin trouvé
        }
        // dd($adminNames);
        return view('Admin/SiteT/AjoutSiteT', ['adminNames' => $adminNames]);
    }

    public function create(Request $request){

        $appUrl= env('APP_URL');
        $token = session('access_token');


        $validateData = $request->validate([
        'name'=> 'required|string',
        'image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'type' =>'integer|max:6',
        'description'=> 'required|string',
        'longitude'=> 'required|string',
        'lattitude' => 'required|string',
        'gerant_id' => 'required|exists:users,id',
            'statut' => 'boolean'
        ]);
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->post("{$appUrl}/api/admin/SiteTouristique/create", [
        'name' => $validateData['name'],
        'description' => $validateData['description'],
        'type' => $validateData['type'],
        'longitude' => $validateData['longitude'],
        'lattitude' => $validateData['lattitude'],
        'image' => $imagePath,
        'gerant_id' => $validateData['gerant_id'],
        'statut' => $validateData['statut'],

        ]);

        if ($response->successful()) {
            return redirect('admin/AjouterSiteTouristiques')->with('statut' , 'SiteTouristique Enreistre avec succes');
        }
        return("rien ne marche mon chaud");

    }

    public function ShowUpdate(string $id)
    {
        $appUrl= env('APP_URL');
        $token = session('access_token');

        $response=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/admin/SiteTouristique/{$id}");
            dd($response->body());
        if ($response->successful()) {
            $site = $response->json();
            // return redirect("admin/users/$id")->with('users', $users);
            // return redirect('Admin.SiteT.updatesite')->route("admin/site/{$site['id']}/update", compact('site'));

           return view('Admin.SiteT.updatesite', compact('site'));
        }
    }


}
