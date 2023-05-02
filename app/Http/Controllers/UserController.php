<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users; //User model.
use Response, Validator;

class UserController extends Controller
{
    public function index()
    {
        $users = Users::all();
      return view ('pages.home')->with('users', $users);
    }
 
    
    public function create()
    {
        return view('pages.create');
    }
 
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'type' => 'required',
            'department' => 'required',

        ]);

        Users::create($request->all());
        return redirect()->route('users.index')
                ->with('success', 'User created succesfully');
    //     $input = $request->all();
    //     Users::create($input);
    //     return redirect('users')->with('flash_message', 'User Addedd!');  
    }
 
    
    public function show($id)
    {
        $users = Users::find($id);
        return view('pages.show')->with('users', $users);
    }
 
    
    public function edit(Request $request, $id)
    {
        $users = Users::find($id);
        return view('pages.edit')->with('users', $users);
    }
 
  
    public function update(Request $request, $id)
    {
        //$request->validate([
        //     'name' => 'required',
        //     'position' => 'required',
        //     'type' => 'required',
        //     'department' => 'required',

        //]);
        // $users->update($request->all());

        // return redirect()->route('users.index')
        //         ->with('success', 'User updated Successfully');
        $users = Users::find($id);
        $input = $request->all();
        $users->update($input);
        return redirect('users')->with('flash_message', 'User Updated!');  
     }
 
  
    public function destroy(Request $request, $id)
    {
        // $users = Users::destroy($id);
        // $input = $request->all();
        Users::destroy($id);
        return redirect('users')->with('flash_message', 'User deleted!');  
    }
}

