<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
$appUrl= env('APP_URL');

class HotelController extends Controller
{
    public function Voirhotels(){
        return view('Admin/Hotels/SeeHotel');
    }
    public function AjouterHotels(){
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

        return view('Admin/Hotels/AjoutHotel',  ['adminNames' => $adminNames]);
        // return view('Admin/Hotels/AjoutHotel');
    }
    public function index(){
        $appUrl= env('APP_URL');
        $token = session('access_token');
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/admin/hotel");
        if($response->successful()){
            $hotels = $response->json();
            // dd($hotels);
            return view ('Admin/Hotels/hotels', compact('hotels'));
        }
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
        'gerant_id' => 'required',//|exists:users,id'
            'statut' => 'boolean'
        ]);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->post("{$appUrl}/api/admin/hotel/create", [
        'name' => $validateData['name'],
        'description' => $validateData['description'],
        'type' => $validateData['type'],
        'longitude' => $validateData['longitude'],
        'lattitude' => $validateData['lattitude'],
        'image' => $validateData['image'],
        'gerant_id' => $validateData['gerant_id'],
        'statut' => $validateData['statut'],
        ]);
        // dd( $response->json()['image_url']);


        if ($response->successful()) {  $response->json()['image_url'];
            return redirect('admin/AjouterHotels')->with('success' , 'Hotel Enreistre avec succes');
        }
        else{
            return redirect('admin/AjouterHotels')->with('echec' , 'Hotel Non Enreistre verifier puis recommencer');
        }

    }

    public function show($id){
        $response = Http::withToken($token)->get("{$appUrl}/api/admin/hotel/{id}");
        dd($response);
        $hotels= new Hotel();
        return view('Admin.Hotels.hotels', compact('hotels'));
    }


    public function update( Request $request, $id){
        $validateData=$request->validate([
            'name'=> 'required|string',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' =>'integer|max:6',
            'description'=> 'required|string',
            'longitude'=> 'required|string',
            'lattitude' => 'required|string',
            'gerant_id' => 'required|exists:users,id'
        ]);
        $response = Http::post("{$appUrl}/api/admin/hotel/create", [
        'name' => $validateData['name'],
        'description' => $validateData['description'],
        'type' => $validateData['type'],
        'longitude' => $validateData['longitude'],
        'lattitude' => $validateData['lattitude'],
        'image' => $imagePath,
        'gerant_id' => $validateData['gerant_id'],
        'statut' => $validateData['statut'],
        ]);
        if($response->successful()){
            redirect('Adminhotels')->with('message', 'Hotel Modifie Avec Succes');
        }

    }

    public function destroy($id){
        // $hotel->statut = 0;
    }



}
