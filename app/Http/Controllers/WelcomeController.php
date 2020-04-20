<?php

namespace App\Http\Controllers;

use App\Accueil;
use App\Article;
use App\Carousel;
use App\Contact;
use App\Footer;
use App\Service;
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
        $team=User::where('role_id','!=',1)->take(3)->get();
        $ceo=User::where('role_id',1)->first();
        $footer=Footer::find(1);
        $contact=Contact::find(1);

        return view('welcome',compact('carousels','accueil','service3','testimonials','services','team','ceo','footer','contact'));
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
        $articles=Article::latest()->take(3)->get();
        $footer=Footer::find(1);
        $contact=Contact::find(1);
        return view('blog',compact('accueil','articles','footer','contact'));
    }
    public function contact(){
        return view('contact');
    }
    public function post(){
        return view('blog-post');
    }
}
