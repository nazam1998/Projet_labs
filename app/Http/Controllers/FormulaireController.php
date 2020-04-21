<?php

namespace App\Http\Controllers;

use App\Formulaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class FormulaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms=Formulaire::all();
        return view('admin.formulaire.index',compact('forms'));       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:formulaires',
            'subject'=>'required|string',
            'msg'=>'required|string',
        ]);
        $form= new Formulaire();
        $form->name=$request->name;
        $form->email=$request->email;
        $form->subject=$request->subject;
        $form->msg=$request->msg;
        $form->save();
        return Redirect::to(URL::previous() . "#contact");
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function show(Formulaire $formulaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Formulaire $formulaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Formulaire $formulaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Formulaire  $formulaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formulaire $formulaire)
    {
        //
    }
}
