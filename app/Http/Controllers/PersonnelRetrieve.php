<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use app\Http\Controllers\Controller;
class PersonnelRetrieve extends Controller
{
    //
    public function index(){
        $users = DB::select('select * from personnel');
        return view('pages/home',['users'=>$users]);
        }
}