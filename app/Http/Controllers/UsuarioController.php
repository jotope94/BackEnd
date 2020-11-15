<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Exception;
use Illuminate\Support\Arr;

class UsuarioController extends Controller
{

    public function __construct() {
       $this->usuario = new Usuario(); 
    }

    public function createUsuario() {
        return view('cadastrarUsuario');
    }

    public function login() {
        return view('login');
    }

    public function saveUsuario(Request $request) {
       try{
            $result = $this->getUsuarioByEmail($request->email);

           if(empty($result))
           {
                Usuario::create([
                    'nome' => $request->nome, 
                    'email' => $request->email, 
                    'senha' => $request->senha,
                    'cpf' => $request->cpf,
                    'idEntidade' => $request->entidade
                ]);
                return "Usuario criado com sucesso";
           }
           
           return "usuario já cadastrado";
        }catch(Exception $erro)
       {
         return $erro;
       }
    }

    public function validationLogin(Request $request) {
       
        $user = $this->getUsuarioByEmail($request->email);

        
        if(!empty( $user) && $user->senha == $request->senha)
        {
            return "entrou";
        }

        return "nao entrou";
    }

    public function getUsuarioByEmail($email){
        try{
            return $this->usuario->where('email','=',$email)->get()->first();
        }catch(Exception $erro)
        {
            return $erro;
        }
    }

    public function getUsuario($email){
        try{
            return $this->usuario->all();
        }catch(Exception $erro)
        {
            return $erro;
        }
    }

    public function saveEmocao(Request $request)
    {   
        $user = $this->getUsuarioByEmail($request->email);
        Usuario::create([
            'idUsuario' => $user->id,
            'emocao' => $request->emocao,
            'idSentimento' => $request->idSentimento,
            'periodo' => $request->periodo
        ]);
        return "Emocao criado com sucesso";
    }
}
