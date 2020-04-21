<?php

namespace App\Http\Controllers;

use App\Mail\NewsMail;
use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=Newsletter::all();
        return view('admin.newsletter.index',compact('news'));
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
            'email'=>'required|email|unique:newsletters'
        ]);
        $news=new Newsletter();
        $news->email=$request->email;
        $news->save();
        Mail::to($news->email)->send(new NewsMail($news->email));
        return Redirect::to(URL::previous() . "#newsletter")->with('msg','Merci pour votre inscription');
        }

    
}
