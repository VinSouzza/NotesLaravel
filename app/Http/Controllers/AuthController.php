<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginSubmit(Request $request){
        // form validation 
        $request->validate(
            // rules
            [
                'text_username' => ['required','email'],
                'text_password' => 'required|min:6|max:16'
            ],
            // error messages
            [
                'text_username.required' => 'Necessário informar o usuário',
                'text_username.email' => 'Username deve ser um e-mail válido',
                'text_password.required' => 'A password é obrigatório',
                'text_password.min' => 'A password deve ter no minimo :min caracteres',
                'text_password.max' => 'A password deve ter no máximo :max caracteres',
            ]
        );

        // get users input
        $username = $request -> input('text_username');
        $password = $request -> input('text_password');

        // test database connection
        try {
            DB::connection()->getPdo();
            echo "Connection  is Ok";
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        echo "Fim";
    }

    public function logout(){
        echo "Logout";
    }
}
