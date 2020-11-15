<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Medico;
use App\Usuario;

class MedicoController extends Controller
{

    private $medico;
    private $usuario;

    public function __controller() {
        $this->medico = new Medico();
        $this->usuario = new Usuario();
    }
    
    public function getUsuarioByIdMedico(Request $request) {
        try{
            return $this->usuario->where('email','=',$request->idMedico)->get()->first();
        }catch(Exception $erro)
        {
            return $erro;
        }
    }

    public function getMedico(){
        try{
            return $this->medico->all();
        }catch(Exception $erro)
        {
            return $erro;
        }
    }
}
