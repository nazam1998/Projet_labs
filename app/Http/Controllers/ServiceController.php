<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icone = [
            [
                'class' => 'flaticon-050-satellite',
                'code' => 'f131',
            ],
            [
                'class' => 'flaticon-049-projector',
                'code' => 'f130',
            ],
            [
                'class' => 'flaticon-048-abstract',
                'code' => 'f12f',
            ],
            [
                'class' => 'flaticon-050-satellite',
                'code' => 'f131',
            ],
            [
                'class' => 'flaticon-035-smartphone',
                 'code' => "\f122"
            ],
            [
                'class' => 'flaticon-036-brainstorming',
                 'code' => "\f123"
            ],
            [
                'class' => 'flaticon-037-idea',
                 'code' => "\f124"
            ],
            [
                'class' => 'flaticon-038-graphic-tool-1',
                 'code' => "\f125"
            ],
            [
                'class' => 'flaticon-039-vector',
                 'code' => "\f126"
            ],
            [
                'class' => 'flaticon-040-rgb',
                 'code' => "\f127"
            ],
            [
                'class' => 'flaticon-041-graphic-tool',
                 'code' => "\f128"
            ],
            [
                'class' => 'flaticon-042-typography',
                 'code' => "\f129"
            ],
            [
                'class' => 'flaticon-043-sketch',
                 'code' => "\f12a"
            ],
            [
                'class' => 'flaticon-044-paint-bucket',
                 'code' => "\f12b"
            ],
            [
                'class' => 'flaticon-045-video-player',
                 'code' => "\f12c"
            ],
            [
                'class' => 'flaticon-046-laptop',
                 'code' => "\f12d"
            ],
            [
                'class' => 'flaticon-047-artificial-intelligence',
                 'code' => "\f12e"
            ],
        ];
        return view('admin.service.add', compact('icones'));
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
            'logo'=>'required|string',
            'titre'=>'required|string',
            'description'=>'required|string',
        ]);
        $service=new Service();
        $service->logo=$request->logo;
        $service->titre=$request->titre;
        $service->description=$request->description;
        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $icone = [
            [
                'class' => 'flaticon-050-satellite',
                'code' => 'f131',
            ],
            [
                'class' => 'flaticon-049-projector',
                'code' => 'f130',
            ],
            [
                'class' => 'flaticon-048-abstract',
                'code' => 'f12f',
            ],
            [
                'class' => 'flaticon-050-satellite',
                'code' => 'f131',
            ],
            [
                'class' => 'flaticon-035-smartphone',
                 'code' => "\f122"
            ],
            [
                'class' => 'flaticon-036-brainstorming',
                 'code' => "\f123"
            ],
            [
                'class' => 'flaticon-037-idea',
                 'code' => "\f124"
            ],
            [
                'class' => 'flaticon-038-graphic-tool-1',
                 'code' => "\f125"
            ],
            [
                'class' => 'flaticon-039-vector',
                 'code' => "\f126"
            ],
            [
                'class' => 'flaticon-040-rgb',
                 'code' => "\f127"
            ],
            [
                'class' => 'flaticon-041-graphic-tool',
                 'code' => "\f128"
            ],
            [
                'class' => 'flaticon-042-typography',
                 'code' => "\f129"
            ],
            [
                'class' => 'flaticon-043-sketch',
                 'code' => "\f12a"
            ],
            [
                'class' => 'flaticon-044-paint-bucket',
                 'code' => "\f12b"
            ],
            [
                'class' => 'flaticon-045-video-player',
                 'code' => "\f12c"
            ],
            [
                'class' => 'flaticon-046-laptop',
                 'code' => "\f12d"
            ],
            [
                'class' => 'flaticon-047-artificial-intelligence',
                 'code' => "\f12e"
            ],
        ];
        return view('admin.service.add', compact('icones',compact('service')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'logo'=>'required|string',
            'titre'=>'required|string',
            'description'=>'required|string',
        ]);
        $service->logo=$request->logo;
        $service->titre=$request->titre;
        $service->description=$request->description;
        $service->save();
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }
}
