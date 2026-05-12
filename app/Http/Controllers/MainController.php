<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\CssSelector\XPath\Extension\FunctionExtension;

class MainController extends Controller
{
    public function index(){
        // load users notes
        $id = session('user.id');
        $notes = User::find($id)->notes()->get()->toArray();


        // show home view
        return view('home', ['notes' => $notes]);
    }
    public function newNote(){
        echo 'Eu to criando uma nova nota';
    }

    public function editNote($id){
        
        $id = $this->decryptId($id);
        
        echo "estou editando a nota com id = $id";
    }

    public function deleteNote($id){
        
        $id = $this->decryptId($id);
        
        echo "estou deletando a nota com id = $id";
    }

    private function decryptId($id){

        // se o id estiver encriptado 
        try {
            $id = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect()->route('home');
        }

        return $id;
    }
}
