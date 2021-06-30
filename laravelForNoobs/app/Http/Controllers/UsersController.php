<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{   
    public function getMeProfile(){
        $username = 'kaue.silva';
        return view('users', compact('username'));
    }

    public function getProfile(string $username){
        return view('users', compact('username'));
    }
}
