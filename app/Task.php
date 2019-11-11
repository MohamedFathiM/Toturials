<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['body'];
    
    public $timestamps = false;
    public function user(){
        return $this -> belongsTo(User::class);
    }

    //using scopes in laravel  
    public function scopeiscomplete($query,$val){
        $tasks = $query->where('completed',$val);
        return $tasks;
    }

}
