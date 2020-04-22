<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    public function index(){
        $users=User::all();
        return view('admin.user.index',compact('users'));
    }
    public function edit(User $user){
        $roles=Role::where('id','!=','1')->get();
        return view('admin.user.edit',compact('user','roles'));
    }
    public function update(Request $request,User $user){
        $request->validate([
            'description'=>'nullable|string',
            'role_id'=>'required|integer|min:2'
        ]);

        $user->role_id=$request->role_id;
        if($request->has('description')){

            $user->description=$request->description;
        }
        $user->save();
        return redirect()->route('user.index');
    }
}
