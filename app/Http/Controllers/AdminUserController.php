<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdminUserController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appUrl= env('APP_URL');
        $token = session('access_token');
        //
        $response=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/admin/users");
        // dd($response->body());
        if ($response->successful()) {
            $users = $response->json();
            return view('Admin.users.Users', compact('users'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function showform()
    {
        return view('Admin.users.AjoutUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $appUrl= env('APP_URL');
        $token = session('access_token');
        // dd($request->all());
        $validateData = $request->validate([
            'name'=> 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'role' => 'nullable',
            'phone_number' => 'required|string',
            'statut' => 'boolean',
        ]);
        $response=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->post("{$appUrl}/api/admin/users/create", [
                'name'=> $validateData['name'],
                'email'=> $validateData['email'],
                'role'=> $validateData['role'],
                'phone_number'=> $validateData['phone_number'],
                'statut'=> $validateData['statut'],
                'password'=> $validateData['password'],
            ]);
            if ($response->successful()) {
                return redirect('admin/users/create')->with('success', 'Hotel Enreistre avec succes');
            }
            else{
                return redirect('')->with('echec', 'Hotel Non Enreistre verifier puis recommencer');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $appUrl= env('APP_URL');
        $token = session('access_token');
        //
        $response=Http::withToken($token)->post("{$appUrl}/api/admin/users/create");
        if ($response->successful()) {
            $user = $response->json();
            return view('Admin.users.show', compact('user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function ShowUpdate(string $id)
    {
        $appUrl= env('APP_URL');
        $token = session('access_token');

        $response=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->get("{$appUrl}/api/admin/users/{$id}");
            if ($response->successful()) {
                $users = $response->json();
                // dd($id);
                // return redirect("admin/users/$id")->with('users', $users);
                return view('Admin.users.update', compact('users'));
            }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $appUrl= env('APP_URL');
        $token = session('access_token');
        dd($request->all());
        $validateData = $request->validate([
            'name'=> 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string',
            'role' => 'nullable',
            'phone_number' => 'required|string',
            'statut' => 'boolean',
        ]);

        $response=Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json'])->withToken($token)->put("{$appUrl}/api/admin/users/$id", $request->all());
            dd($id);
        if ($response->successful()) {
            return redirect('admin/users')->with('modifier', 'Hotel Enreistre avec succes');
        }
        else{
            $users = $response->json();
            return view('Admin.users.Users', compact('users'))->with('!modifier', 'Hotel Non Enreistre verifier puis recommencer');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $appUrl= env('APP_URL');
        $token = session('access_token');
        //
        $response=Http::withToken($token)->delete("{$appUrl}/api/admin/users/$id");
        if ($response->successful()) {
            $usersdlt = $response->json();
            return redirect()-> with('delete', "utilisateur desactive avec succes");
        }
    }
}
