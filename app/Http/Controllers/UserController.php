<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //User model.
use Response, Validator;

class UserController extends Controller
{
    public function index(Request $request){
        // $token = $request->session()->token();

        // $token = csrf_token();

        // var_dump($token);
        $value = $request->header('X-Header-Name');
        return view('pages/home')->with('header', $value);
    }

    public function show(){
        $data = User::all();
        return view('pages/users')->with('users', $data);
    }

    public function showUser(Request $request, string $id) {
        $data = User::find($id);
        return view('pages/user')
                    ->with('user', $data)
                    ->with('id', $id);
    }

    public function testPage(Request $request){
        return view('pages/test');

    }

    public function testEnd(Request $request){
        // $data = $request->all();
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:60',
            'age' => 'required'
        ]);
        // return back()->with('success', 'User created successfully.');
        // $validator = $request->validate([
        //     'name' => ['required', 'min:2', 'max:60'],
        //     'age' => ['required'],
        // ]);

        // return JSON response.
        // if($validator->passes()){
        //     return response()->json(['success'=> 'Valid info.', 'details' => $request->all()]);
        // }
        // return response()->json(['error'=>$validator->errors()]);

        // default form submission.
        // if($validator->passes()){
        //     return back()->with('success', 'User created successfully.');
        // }
        
        // return back()->withErrors(['name'=> $validator->messages()->first('name')]);
        
    }

    public function updateUser(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'first_name' => 'required|min:3|max:60',
            'last_name' => 'required|min:3|max:60',
            'username' => 'required|min:3|max:60',
            'email' => 'required|max:60',
        ]);
        
        if($validator->passes()){
            $user = User::find($id);
            $user->first_name = $request->input('first_name');
            $user->last_name = $request->input('last_name');
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->update();

            return redirect()->back()->with('success', 'Update successful');
            // return 'success';
        }
        // return var_dump($validator->errors());
        return redirect()->back()->withErrors($validator->errors());
        
    }
    
}
