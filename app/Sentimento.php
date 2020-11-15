<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sentimento extends Model
{
    protected $table = 'sentimento'; 
    protected $fillable = [
        'nome'
    ];
    protected $primaryKey = 'id'; 

    public function relationEmocao() {
        return $this->hasMany('app\Emocao','id'); 
    }
}
