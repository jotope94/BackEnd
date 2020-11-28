<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Usuario;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;



class UsuarioControllerTest extends TestCase
{
    //Inicializa as informações quando for passar por cada teste
    public function setUp()
    {
        parent::setUp();
        $this->request = new Request;
       
        $this->name = 'joao';
        $this->email = 'joao@gmail.com';
        $this->senha = '123';
        $this->cpf = '123456654321';
        $this->idEntidade = '1';
        $this->idMedico = '1';

        $this->request->replace([
            'nome' => $this->name, 
            'email' => $this->email , 
            'senha' => $this->senha,
            'cpf' => $this->cpf,
            'idEntidade' => $this->idEntidade,
            'idMedico' => $this->idMedico
        ]);

        $this->usuarioController = new UsuarioController($this->request);
        
    }

    //testa o metodo passando as informações corretas e verifica se as informações retornam corretamente 
    public function testValidationLogin()
    {
        $user = new Request;

        $user->replace([
            'nome' => $this->name, 
            'email' => $this->email , 
            'senha' => $this->senha,
            'cpf' => $this->cpf,
            'idEntidade' => $this->idEntidade,
            'idMedico' => $this->idMedico
        ]);

        $this->assertequals(true,$this->usuarioController->ValidationLogin($user));
    }

    //testa o metodo passando as informações incorretas e verifica se as informações retornam conforme o esperado 
    public function testValidationLoginWithFail()
    {
        $user = new Request;

        $user->replace([
            'nome' => $this->name, 
            'email' => $this->email , 
            'senha' => 987,
            'cpf' => $this->cpf,
            'idEntidade' => $this->idEntidade,
            'idMedico' => $this->idMedico
        ]);

        $this->assertequals(false,$this->usuarioController->ValidationLogin($user));
    }
}
