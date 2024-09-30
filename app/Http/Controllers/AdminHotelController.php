<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class AdminHotelController extends Controller
{
    public function home($hotel_id){
        $token = session('access_token');
        $appUrl= env('APP_URL');

        $response=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/user/auth");
        if ($response->successful()) {
            $user = $response->json();
            if ($user['hotel']['id'] == $hotel_id) {
                //dd($hotel_id); //, ['hotel_id' => $hotel_id]
                return view('AdminHotel.Hdashbord')->with('hotel_id', $hotel_id);
            }
        }
        return view('layouts.UsersHome');
    }

    public function homepiece($hotel_id) {

        $token = session('access_token');
        $appUrl= env('APP_URL');
            //
        $response=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/user/auth");
        if ($response->successful()) {
            $user = $response->json();
            if ($user['hotel']['id'] == $hotel_id) {
                $response = Http::withHeaders([
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/hotel/$hotel_id/pieces");
                if($response->successful()){
                    $pieces = $response->json();
                    return view ('AdminHotel.PiecesH.AdminPiece', compact('pieces', 'hotel_id'));
                }
            }
        }
    }

    //
    public function AddForm(){
        return view('AdminHotel.PiecesH.AjouterPiece');
    }
    public function store(Request $request, $hotel_id){
        $token = session('access_token');
        $appUrl= env('APP_URL');
        $validateData=$request->validate([
           'type' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'statut' => 'boolean|required'
        ]);
        // dd($validateData);

        $response =Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->post("{$appUrl}/api/admin-hotel/$hotel_id/pieces/create", [
                'statut' => $validateData['statut'],
                'description' => $validateData['description'],
                'type' => $validateData['type'],
                'price' => $validateData['price']
            ]);
        $piece = $response->json();
        // dd($response->body(), $piece = $response->json());

        if($response->successful()){
            return view('AdminHotel.PiecesH.AdminPiece')->with('success', 'Piece Ajoutee Avec Succes');
        }else{
            return view('AdminHotel.PiecesH.AdminPiece')->with('echec', 'Piece non Ajoutee');
        }

    }
}
