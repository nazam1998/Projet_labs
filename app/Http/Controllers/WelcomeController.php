<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\Article;
use App\Blog;
use App\Carousel;
use App\Categorie;
use App\Comment;
use App\Contact;
use App\Footer;
use App\Google;
use App\Service;
use App\Tag;
use App\Testimonial;
use App\User;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $carousels=Carousel::all();
        $accueil=Accueil::find(1);
        $service3=Service::latest()->take(3)->get();
        $testimonials=Testimonial::latest()->take(6)->get();
        $services=Service::inRandomOrder()->take(9)->get();
        $team=User::inRandomOrder()->where('role_id','!=',1)->take(3)->get();
        $ceo=User::where('role_id',1)->first();
        $carousel=Carousel::all();
        $footer=Footer::find(1);
        $contact=Contact::find(1);

        return view('welcome',compact('carousels','accueil','service3','testimonials','services','team','ceo','footer','carousel','contact'));
    }
    public function service(){

        $lastservices=Service::latest()->take(9)->get();
        $accueil=Accueil::find(1);
        $services=Service::latest()->take(6)->get();
        $articles=Article::latest()->take(3)->get();
        $footer=Footer::find(1);
        $contact=Contact::find(1);
        return view('service',compact('lastservices','services','accueil','contact','footer','articles'));
    
    }
    public function blog(){
        $accueil=Accueil::find(1);
        $blog=Blog::find(1);
        $articles=Article::where('valide',true)->paginate(3);
        $footer=Footer::find(1);
        $contact=Contact::find(1);
        $tags=Tag::inRandomOrder()->take(9)->get();
        $categories=Categorie::inRandomOrder()->take(6)->get();
        return view('blog',compact('accueil','articles','tags','categories','footer','contact','blog'));
    }
    public function contact(){
        $accueil=Accueil::find(1);
        $contact=Contact::find(1);
        $google=Google::find(1);
        return view('contact',compact('accueil','contact','google'));
    }
    public function post($id){
        $accueil=Accueil::find(1);
        $blog=Blog::find(1);
        $footer=Footer::find(1);
        $contact=Contact::find(1);
        $article=Article::find($id);
        $comments=Comment::where('article_id',$id)->get();
        $tags=Tag::inRandomOrder()->take(9)->get();
        $categories=Categorie::inRandomOrder()->take(6)->get();
        return view('blog-post',compact('accueil','footer','article','comments','blog','tags','categories'));
    }
}
