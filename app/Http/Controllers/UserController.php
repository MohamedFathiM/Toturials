<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User ; 


class UserController extends Controller
{
    //Routes model binding 
    public function index(User $user){
        $tasks = $user->tasks()->iscomplete(1)->get();
        return view('welcome',compact('tasks'));
    }

    
}
