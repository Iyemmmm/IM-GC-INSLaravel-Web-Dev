<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register(){
        return view('register');
    }
    public function welcome(Request $request)
{
    $firstName = $request->query('first_name');
    $lastName = $request->query('last_name');

    return view('welcome', [
        'first_name' => $firstName,
        'last_name' => $lastName
    ]);
}
    public function processRegistration(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');

        return redirect()->route('welcome', ['first_name' => $firstName, 'last_name' => $lastName]);
    }



}
