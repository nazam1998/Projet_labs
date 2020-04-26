<?php

namespace App\Http\Controllers;

use App\Mail\NewsMail;
use App\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
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
        $news = Newsletter::all();
        return view('admin.newsletter.index', compact('news'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'emailnews' => 'required|email|unique:newsletters'
        ]);
            
        if ($validator->fails()) {
            return redirect()->to(url()->previous() . '#formulaire-news')->withErrors($validator)->withInput();
        }

        $news = new Newsletter();
        $news->email = $request->email;
        $news->save();
        Mail::to($news->email)->send(new NewsMail($news->email));

        return redirect()->to(url()->previous() . '#formulaire-news')->with('msgnews', 'Merci pour votre insciption');
    }
}
