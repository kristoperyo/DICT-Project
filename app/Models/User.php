<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function index()
    {
        $users = user::all();
        
        return view('home', compact('users'));
    }


    // use HasFactory;
    // protected $table = 'users';
    // protected $primaryKey = 'id';
    // protected $fillable = ['username', 'password', 'email', 'first_name', 'last_name'];
}

