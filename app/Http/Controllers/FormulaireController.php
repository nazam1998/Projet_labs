<?php

namespace App\Http\Controllers;

use App\Formulaire;
use App\Mail\RegisterMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FormulaireController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only('index');
        $this->middleware('admin')->only('index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forms = Formulaire::all();
        return view('admin.formulaire.index', compact('forms'));
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
            'name' => Auth::guest() ? 'required|string' : '',
            'email' => Auth::guest() ? 'required|email|unique:formulaires':'',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);
        $form = new Formulaire();
        if (Auth::guest()) {
            $form->name = $request->name;
            $form->email = $request->email;
        }else{
            $form->name=Auth::user()->nom;
            $form->email=Auth::user()->email;
        }
        $form->subject = $request->subject;
        $form->msg = $request->message;
        $form->save();
        Mail::to($form->email)->send(new RegisterMail($form->name, $form->msg));
        return redirect()->to(url()->previous() . '#contact')->with('msg', 'Votre message a été envoyé avec succès');
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
