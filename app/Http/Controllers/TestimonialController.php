<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
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
        $testimonials=Testimonial::all();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.add');
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
            'image'=>'required|image',
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'fonction'=>'required|string',
            'texte'=>'required|string',
        ]);

        $testimonial=new Testimonial();
        $image=Storage::disk('public')->put('',$request->image);
        $testimonial->image=$image;
        $testimonial->nom=$request->nom;
        $testimonial->prenom=$request->prenom;
        $testimonial->fonction=$request->fonction;
        $testimonial->texte=$request->texte;
        $testimonial->save();
        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'image'=>'sometimes|image',
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'fonction'=>'required|string',
            'texte'=>'required|string',
        ]);
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists($testimonial->image)){
                Storage::disk('public')->delete($testimonial->image);
            }
            $image=Storage::disk('public')->put('',$request->image);
            $testimonial->image=$image;
        }
        $testimonial->nom=$request->nom;
        $testimonial->prenom=$request->prenom;
        $testimonial->fonction=$request->fonction;
        $testimonial->texte=$request->texte;
        $testimonial->save();
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if(Storage::disk('public')->exists($testimonial->image)){
            Storage::disk('public')->delete($testimonial->image);
        }
        $testimonial->delete();
        return redirect()->back();
    }
}
