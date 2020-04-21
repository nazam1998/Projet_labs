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
        $article->categorie_id=$request->categorie;
        $article->valide=false;
        $article->save();
        foreach($request->tag as $tag){

            Tag::where('id',$tag)->first()->articles()->attach($article->id);
            $article->tags()->attach($tag);
        }
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
        $article->valide=true;
        $article->save();
        return redirect()->back();
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
            'categorie'=>'required|integer',
            // 'tag_id'=>'required|integer'
        ]);
        if($request->hasFile('image')){
            if(Storage::disk('public')->exists($article->image)){
                Storage::disk('public')->delete($article->image);
            }
        }
        $image=Storage::disk('public')->put('',$request->image);
        $article->image=$image;
        $article->titre=$request->titre;
        $article->texte=$request->texte;
        $article->user_id=Auth::id();
        $article->categorie_id=$request->categorie;
        $article->valide=false;
        $article->save();
        $article->tags()->detach();
        foreach($request->tag as $tag){
            Tag::where('id',$tag)->first()->articles()->attach($article->id);
            $article->tags()->attach($tag);
        }
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        if(Storage::disk('public')->exists($article->image)){
            Storage::disk('public')->delete($article->image);
        }
        $article->delete();
        return redirect()->back();
    }
    public function search(Request $request){
        $articles=Article::where('titre','LIKE','%'.$request->titre.'%')->get();
        
        return view('admin.article.show',compact('articles'));
    }
}
