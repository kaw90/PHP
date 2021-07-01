<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\This;

class UsersController extends Controller
{   
    public function getMeProfile(){
        $username = 'kaue.silva';
        return view('users', compact('username'));
    }

    public function getProfile(string $username){
        return view('users', compact('username'));
    }

    public function test(Request $request)
    {
        $validated = $request->validate([

        ]);
    }
}
