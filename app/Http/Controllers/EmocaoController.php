<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Emocao;
use App\Sentimento;
use Exception;
use App\Http\Controllers\UsuarioController;

class EmocaoController extends Controller
{
    

    public function __construct() {
        $this->emocao = new Emocao(); 
        $this->sentimentos = new Sentimento();
        $this->usuarioController = new UsuarioController();
     }

     public function createEmocao() {
        return view('cadastrarEmocao');
    }

    public function getEmocaoByIdUsuario($idUsuario){
        try{
            return $this->usuario->where('idUsuario','=',$idUsuario)->get()->first();
        }catch(Exception $erro)
        {
            return $erro;
        }
    }

    public function getSentimento(){
        try{
            return $this->sentimentos->all();;
        }catch(Exception $erro)
        {
            return $erro;
        }
    }

    public function saveEmocao(Request $request) {
        try{
            Emocao::create([
                'idUsuario' => $request->idUsuario, 
                'idSentimento' => $request->idSentimento,
                'periodo' => $request->periodo,
            ]);
            return "Emocao criado com sucesso";
         }catch(Exception $erro)
        {
          return $erro;
        }
     }
}
