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
        $appUrl= env('APP_URL');
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
            // dd($response->body());
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
        $photo =$request->file('image');
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Accept' => 'application/json'])
            ->attach('image', file_get_contents($photo->getRealPath()), $photo->getClientOriginalName())
            ->post("{$appUrl}/api/admin/hotel/create", [
            'name' => $validateData['name'],
            'description' => $validateData['description'],
            'type' => $validateData['type'],
            'longitude' => $validateData['longitude'],
            'lattitude' => $validateData['lattitude'],
            'gerant_id' => $validateData['gerant_id'],
            'statut' => $validateData['statut'],
        ]);
        if ($response->successful()) {
            return redirect('admin/AjouterHotels')->with('success' , 'Hotel Enreistre avec succes');
        }
        else{
            return redirect('admin/AjouterHotels')->with('echec' , 'Hotel Non Enreistre verifier puis recommencer');
        }

    }


    public function Show($id){
        $appUrl= env('APP_URL');
        $token = session('access_token');
        $response = Http::withHeaders([
            'Authorization' => "Bearer $token",
            'Accept' => 'application/json'])
        ->get("{$appUrl}/api/admin/hotel/{$id}");
        if ($response->successful()) {
            $hotel = $response->json();
            // dd($hotel['image']);
            return view('Admin.Hotels.SeeHotel', compact('hotel', 'appUrl'));
        }


    }


    public function showupdate( string $id){
        $appUrl= env('APP_URL');
        $token = session('access_token');
        $response1 = Http::withToken($token)->get('http://127.0.0.1:8000/api/admin/user/filtre');
        $adminNames = [];

        // Vérifiez si la requête a réussi
        if ($response1->successful()) {
            $adminNames = $response1->json(); // Récupérer les noms sous forme de tableau associatif
            $response=Http::withHeaders([
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/admin/hotel/{$id}");
            if ($response->successful()) {
                // dd($response->body());
                 $hotel = $response->json();
                return view('Admin.Hotels.updatehotel', compact('hotel', 'adminNames', 'appUrl'));
            }
            else {
            $adminNames = []; // Aucun admin
            }
        }

    }
    public function Postupdate( Request $request, $id){
        $token = session('access_token');
        $appUrl= env('APP_URL');

        $validateData=$request->validate([
            'name'=> 'required|string',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' =>'integer|max:6',
            'description'=> 'required|string',
            'longitude'=> 'required|string',
            'lattitude' => 'required|string',
            'gerant_id' => 'required'
        ]);
        $response =Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->put("{$appUrl}/api/admin/hotel/$id/update", $request->all());

        if($response->successful()){
            redirect('Adminhotels')->with('message', 'Hotel Modifie Avec Succes');
        }
        else{
            $users = $response->json();
            redirect('Adminhotels')->with('!modifier', 'Hotel Non Enreistre verifier puis recommencer');
        }

    }

    public function destroy($id){
        dd("ovuidv");
        $appUrl= env('APP_URL');
        $token = session('access_token');
        dd("ovuidv");
        $response=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->delete("{$appUrl}/api/admin/hotel/$id");
        if ($response->successful()) {
            $hotel = $response->json();
            dd($response->body());
            redirect('Adminhotels')->compact('hotel')-> with('delete', "Hotel desactive avec succes");
        }
        else{
            dd('Hotel non suprimer');
        }
    }




}
