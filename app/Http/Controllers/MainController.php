<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        echo 'Eu to aqui paezão!';
    }
    public function newNote(){
        echo 'Eu to criando uma nova nota';
    }
}
