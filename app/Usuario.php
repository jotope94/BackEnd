<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario'; 
    protected $fillable = [
        'nome', 
        'email', 
        'senha',
        'cpf',
        'idEntidade',
        'idMedico'
    ];
    protected $primaryKey = 'id'; 

    public function relationEntidade() {
        return $this->belongsTo('app\Entidade','entidade'); 
   } 
}
