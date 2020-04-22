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
        $accueil=Accueil::find(1);
        return view('profile.edit',compact('accueil'));
    }
    public function update(Request $request){
       
       
        $changement=new Changement();
        
        $changement->password=Hash::make($request->password);
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists(Auth::user()->image)){
                Storage::disk('public')->delete(Auth::user()->image);
            }
            $imageName=Storage::disk('public')->put('',$request->image);
            $changement->image=$imageName;
        }
        $changement->nom=$request->nom;
        $changement->prenom=$request->prenom;
        $changement->email=$request->email;
        $changement->description=$request->description;
        $changement->password=Hash::make($request->password);
        $changement->save();
        return redirect()->back();


    }
}
