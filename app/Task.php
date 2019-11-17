<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    protected $table = 'tasks';

    protected $fillable = ['name', 'description','user_id'];

    public function user(){
        $this->belongTo('App\User');    
    }
}
