<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    protected $table = 'entidade'; 
    protected $fillable = [
        'name'
    ];
    protected $primaryKey = 'id'; 

    public function relationEntidade() {
        return $this->hasMany('app\Usuario','id'); 
   } 
}
