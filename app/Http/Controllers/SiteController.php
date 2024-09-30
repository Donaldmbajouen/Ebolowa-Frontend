<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SiteController extends Controller
{

    public function dashboard(){
        return view('Admin/dashboard');
    }
    public function hotels(){
        return view('Admin/Hotels/hotels');
    }









    public function show($id){
        return view('Admin.SiteTouristiques.SeeSiteTouristique');
    }

    

    public function destroy($id){
        // $SiteTouristique->statut = 0;
    }
    public function userfiltre(){
        // Appeler l'API pour récupérer les noms des admins secondaires
        $response = Http::get('http://127.0.0.1:8000/api/admin/user/filtre');

        $adminNames = [];

        // Vérifiez si la requête a réussi
        if ($response->successful()) {
            $adminNames = $response->json(); // Récupérer les noms sous forme de tableau associatif
        } else {
            $adminNames = []; // Aucun admin trouvé
        }
        dd($adminNames);

        return view('Admin/SiteTouristiques/AjoutSiteTouristique',  ['adminNames' => $adminNames]);

    }
}
