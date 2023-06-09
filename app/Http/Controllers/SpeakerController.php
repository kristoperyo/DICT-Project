<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Speaker;
use Response, Validator;
use RealRashid\SweetAlert\Facades\Alert;

class SpeakerController extends Controller
{
    public function index()
    {
      $speaker = Speaker::paginate(2);
      return view ('pages.speaker')->with('speaker', $speaker);
    }

    public function create()
    {
        
    }
 
  
    public function store(Request $request)
    {
      $speaker = Speaker::create([
             'name' => $request->name,
            'contact' => $request->contact,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('Profile Added Successfully', 'Welcome');
      
        //return view('pages.speaker')->with('speaker', $speaker);     
        // $request->validate([
        //     'name' => 'required|min:3|max:40',
        //     'contact' => 'required|min:11|max:13',
        //     'email' => 'required|min:3|max:40',

        // ]);

        // Speaker::create($request->());
        // Alert::success('Successful!', 'Profile Added Successfully!');
        // return redirect('pages.speaker');  
    }
 
    
    public function show()
    {
        
    }
 
    
    public function edit(Request $request, $id)
    {
        
    }
 
  
    public function update(Request $request, $id)
    {
         
    }
 
  
    public function destroy(Request $request, $id)
    {
      Speaker::destroy($id);
      Alert::warning('Deleted Successfully');
      return redirect('speaker');
    }
}
