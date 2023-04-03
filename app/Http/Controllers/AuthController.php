<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //User model.

class AuthController extends Controller
{
    public function register() {
        return view('auth/register');
    }

    public function create(Request $request){
        $input = $request->all();
        User::create($input);
        return redirect('register')->with('flash_message', 'Register successful.');
    }

  
}
