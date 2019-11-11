<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function user(){
        return $this -> belongsTo(User::class);
    }

    //usin scopes in laravel  
    public function scopeiscomplete($query,$val){
        $tasks = $query->where('completed',$val);
        return $tasks;
    }

}
