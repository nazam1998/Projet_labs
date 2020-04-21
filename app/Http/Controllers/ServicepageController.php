<?php

namespace App\Http\Controllers;

use App\Servicepage;
use Illuminate\Http\Request;

class ServicepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicepage=Servicepage::all();
        return view('admin.servicepage.index',compact('serviepage'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servicepage  $servicepage
     * @return \Illuminate\Http\Response
     */
    public function show(Servicepage $servicepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicepage  $servicepage
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicepage $servicepage)
    {
        return view('admin.servicepage.edit',compact('servicepage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicepage  $servicepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicepage $servicepage)
    {
        $request->validate([
            'titre1'=>'required|string',
            'titre2'=>'required|string',
        ]);
        $servicepage->titre1=$request->titre1;
        $servicepage->titre2=$request->titre2;
        $servicepage->save();
        return redirect()->route('servicepage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicepage  $servicepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicepage $servicepage)
    {
        //
    }
}
