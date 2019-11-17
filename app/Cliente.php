<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

    protected $table = 'clientes';

    protected $fillable = ['name', 'second_names','company','age','mail','puesto'];

    public function user(){
        $this->belongTo('App\User');    
    }
    
}
