<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users; //User model.
use Response, Validator;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    public function index()
    {
        // $search = request()->query('search');
        // if ($search)
        // {
        //     $users = Users::where('name', 'LIKE', "%{$search}%")->simplePaginate(3);
        // }
        // else
        // {
        //     $users = Users::simplePaginate(3);
        // }

        $users = Users::paginate(5);
      return view ('pages.home')->with('users', $users);
    }
 
    
    public function create()
    {
        return view('pages.create');
    }
 
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'position' => 'required|min:3|max:40',
            'department' => 'required|min:3|max:40',
            'contact' => 'required|min:11|max:13',
            'email' => 'required|min:3|max:40',
        ]);

        // $users = Users::create([
        //     'name' => $request->name,
        //     'position' => $request->position,
        //     'type' => $request->type,
        //     'department' =>$request->department,
        // ]);
        // return redirect('users');
        // Alert::success('Successful', 'Welcome to the dashboard');
                

        Users::create($request->all());
        Alert::success('Successful!', 'Profile Added Successfully!');
        return redirect('users');
        
        //->with('Successful', 'Welcome to the dashboard');
               
        
        
    //     $input = $request->all();
    //     Users::create($input);
    //     return redirect('users')->with('flash_message', 'User Addedd!');  
    }
 
    
    public function show()
    {
        //$users = Users::find($id);
        return view('pages.partners');
        //->with('users', $users);
    }
 
    
    public function edit(Request $request, $id)
    {
        // return view('pages.edit', compact('users'));
        $users = Users::find($id);  
        return view('pages.edit', compact('users'))->with('users', $users);
    }
 
  
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'position' => 'required|min:3|max:40',
            'department' => 'required|min:3|max:40',
            'contact' => 'required|min:11|max:13',
            'email' => 'required|min:3|max:40',

        ]);
        //$users->update($request->all());

        // return redirect()->route('users.index')
        //         ->with('success', 'User updated Successfully');

        $users = Users::find($id);
        $input = $request->all();
        $users->update($input);
        Alert::success('Updated!', 'User Updated Successfully');
        return redirect('users');
        
       // ->with('success', 'Contact Updated!');   
     }
 
  
    public function destroy(Request $request, $id)
    {
        // $users = Users::destroy($id);
        // $input = $request->all();
        Users::destroy($id);
        Alert::warning('Deleted Successfully');
        return redirect('users');
        //->with('warning', 'User deleted!');  
    }

    // public function search()
    // {
    //     $search_text = $_GET['query'];
    //     $users = Users::where('Name' , 'LIKE' , '%'.$search_text.'%')->get();

    //     return view('pages.search', compact('users'));
    // }
}

