<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\Changement;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user=User::find(Auth::id());
        return view('profile.edit',compact('user'));
    }
    public function update(Request $request){
       $request->validate([
        'nom' => ['required', 'string', 'max:255'],
        'prenom' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.Auth::id()],
        'password' => ['nullable', 'string', 'min:8',],
        'image'=>['nullable','image'],
        'description'=>['nullable','string']
       ]);
       
        $changement=new Changement();
        
        $changement->password=Hash::make($request->password);
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists(Auth::user()->image)){
                Storage::disk('public')->delete(Auth::user()->image);
            }
            $imageName=Storage::disk('public')->put('',$request->image);
            $changement->image=$imageName;
        }else{
            $changement->image=Auth::user()->image;
        }
        $changement->nom=$request->nom;
        $changement->prenom=$request->prenom;
        $changement->email=$request->email;
        $changement->description=$request->description;
        $changement->user_id=Auth::id();
        if($request->has('password')){
            $changement->password=Hash::make($request->password);
        }else{
            $changement->password=Auth::user()->password;
        }
        $changement->save();
        return redirect()->back();


    }
}
