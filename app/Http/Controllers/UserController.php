<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

   
    public function create()
    {
        return view('users.addusers');
    }

    
  
    public function store(Request $request)
    {
        // dd($request);
        
        $request->validate([
            'name'=> 'required|string',
            'email'=>'required|string',
            'phone'=>'required|numeric',
            'status'=>'sometimes|boolean',
            'role'=>'required|string|in:admin,staff'
        ]);
        User::create($request->all());
        $request->session()->flash('msg' , 'data submitted');
            return redirect('/users');


    }

    
    public function show(User $user)
    {
        
    }

    
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.editusers', compact('user'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=> 'required|string',
            'email'=>'required|string',
            'phone'=>'required|numeric',
            'status'=>'sometimes|boolean',
            'role'=>'required|string|in:admin,staff'
        ]);
        $user = User::findOrFail($id);
        $user->update($request->all());

        $request->session()->flash('msg' , 'data submitted');
            return redirect('/users');
    }

    
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/users');
    }
}



 

    
   
