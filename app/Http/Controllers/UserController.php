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
        return view('pages/home')->with('users', $data);
    }

    public function showUser(Request $request, string $id) {
        $data = User::find($id);
        return view('pages/home')
                    ->with('user', $data);
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

    // public function updateUser(Request $request, $id) {

    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|min:3|max:60',
    //         'position' => 'required|min:3|max:60',
    //         'type' => 'required|min:3|max:60',
    //         'department' => 'required|max:60',
    //         'action' => 'required|max:60',
    //     ]);
        
    //     if($validator->passes()){
    //         $users = User::find($id);
    //         $users->name = $request->input('name');
    //         $users->position = $request->input('position');
    //         $users->type = $request->input('type');
    //         $users->department = $request->input('department');
    //         $users->action = $request->input('action');
    //         $users->update();

    //         return redirect()->back()->with('success', 'Update successful');
    //         // return 'success';
    //     }
    //     // return var_dump($validator->errors());
    //     return redirect()->back();
    //}  

    public function updateUser(Request $request, User $users){
        $data = $request->validate([
            'Name' => 'required|min:3|max:60',
            'Position' => 'required|min:3|max:60',
            'Type' => 'required|min:3|max:60',
            'Department' => 'required|max:60',
            'Action' => 'required|max:60',
        ]);
        $input = $request->all();
        $users->update($input);
        return  view('pages/home')->with('users', $data);
    }

    function register(Request $req)
     {
        $data = User::all();
        return view('auth/register') ->with('users', $data);
     }
}
