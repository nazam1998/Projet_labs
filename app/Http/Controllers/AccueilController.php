<?php

namespace App\Http\Controllers;

use App\Accueil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class AccueilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accueils = Accueil::all();
        $edit = Accueil::find(1);
        return view('admin.accueil.index', compact('accueils', 'edit'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function show(Accueil $accueil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function edit(Accueil $accueil)
    {
        return view('admin.accueil.edit', compact('accueil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accueil $accueil)
    {
        $request->validate([
            'image_video' => 'sometimes|image',
            'logo' => 'sometimes|image',
            'titre_carousel' => 'required|string',
            'titre_about' => 'required|string',
            'text1_about' => 'required|string',
            'text2_about' => 'required|string',
            'video' => 'required|string',
            'titre_testimonials' => 'required|string',
            'titre_team' => 'required|string',
            'titre_team' => 'required|string',
            'titre_promotion' => 'required|string',
            'text_promotion' => 'required|string',
        ]);
        if ($request->hasFile('imageVideo')) {
            
            if (Storage::disk('public')->exists($accueil->image_video)) {
                Storage::disk('public')->delete($accueil->image_video);
            }
            $image = Storage::disk('public')->put('', $request->imageVideo);
            $accueil->image_video = $image;
        }
        if ($request->hasFile('logo')) {
            
            if (Storage::disk('public')->exists($accueil->logo)) {
                Storage::disk('public')->delete($accueil->logo);
            }

            $biglogo = Storage::disk('public')->put('', $request->logo);
            
            $accueil->big_logo = $biglogo;

            Image::configure(array('driver' => 'gd'));

            $logo='little'.$biglogo;

            Image::make(storage_path('app/public/' . $accueil->big_logo))
            ->resize(111,32 )
            ->save(storage_path('app/public/' .$logo));

            $accueil->logo=$logo;

        }

        $accueil->titre_carousel = $request->titre_carousel;
        $accueil->titre_about = $request->titre_about;
        $accueil->text1_about = $request->text1_about;
        $accueil->text2_about = $request->text2_about;
        $accueil->titre_service = $request->titre_service;
        $accueil->video = $request->video;
        $accueil->titre_testimonials = $request->titre_testimonials;
        $accueil->titre_team = $request->titre_team;
        $accueil->titre_promotion = $request->titre_promotion;
        $accueil->text_promotion = $request->text_promotion;
        $accueil->showbutton = $request->has('button');

        $accueil->save();
        return redirect()->route('accueil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accueil  $accueil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accueil $accueil)
    {
        if()
    }
}
