<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emocao extends Model
{
    protected $table = 'emocao'; 
    protected $fillable = [
        'idUsuario',
        'idSentimento',
        'periodo'
    ];
    protected $primaryKey = 'id'; 

    public function relationUsuario() {
        return $this->hasMany('app\Usuario','id'); 
    }

    public function relationEntidade() {
        return $this->belongsTo('app\Sentimento','id'); 
    }
}
