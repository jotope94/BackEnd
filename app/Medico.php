<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medico'; 
    protected $fillable = [
        'nome', 
        'email', 
        'senha',
        'cpf',
        'idUsuario'
    ];
    protected $primaryKey = 'id'; 

    public function relationUsuario() {
        return $this->hasMany('app\Usuario','id');
   } 

}
