<?php

namespace App\Http\Controllers;

use App\Changement;
use App\User;
use Illuminate\Http\Request;

class ChangementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('manage-user');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $changements=Changement::all();
        return view('admin.changement.index',compact('changements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Changement $changement)
    {
        $user=User::find($changement->user_id);
        $user->nom=$changement->nom;
        $user->prenom=$changement->prenom;
        $user->email=$changement->email;
        $user->password=$changement->password;
        $user->description=$changement->description;
        $user->image=$changement->image;
        $user->save();
        $changement->delete();
        return redirect()->route('changement');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Changement  $changement
     * @return \Illuminate\Http\Response
     */
    public function show(Changement $changement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Changement  $changement
     * @return \Illuminate\Http\Response
     */
    public function edit(Changement $changement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Changement  $changement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Changement $changement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Changement  $changement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Changement $changement)
    {
        $changement->delete();
        return redirect()->back();
    }
}
