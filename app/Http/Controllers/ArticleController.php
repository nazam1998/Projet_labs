<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categorie;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();
        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tag::all();
        $categories=Categorie::all();
        return view('admin.article.add',compact('tags','categories'));
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
            'titre'=>'required|string',
            'texte'=>'required|string',
            'image'=>'required|image',
            'categorie'=>'required|integer',
            // 'tag_id'=>'required|integer'
        ]);
        $image=Storage::disk('public')->put('',$request->image);
        $article=new Article();
        $article->image=$image;
        $article->titre=$request->titre;
        $article->texte=$request->texte;
        $article->user_id=Auth::id();
        $article->tag_id=$request->tag;
        $article->categorie_id=$request->categorie_id;
        $article->valide=false;
        $article->save();
        $article->tags()->sync( $request->tag );
        return redirect()->route('article.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        $tags=Tag::all();
        $categories=Categorie::all();
        return view('admin.article.add',compact('tags','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'titre'=>'required|string',
            'texte'=>'required|string',
            'image'=>'required|image',
            'user_id'=>'required|integer',
            'categorie_id'=>'required|integer',
            'tag_id'=>'required|integer'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        
    }
}
