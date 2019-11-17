<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class helpdesk extends Model
{
    protected $table = 'helpdesks';

    protected $fillable = ['name', 'status','company','description','note','user_id'];

    public function user(){
        $this->belongTo('App\User');    
    }
}
