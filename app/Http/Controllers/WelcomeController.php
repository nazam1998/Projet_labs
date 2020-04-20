<?php

namespace App\Http\Controllers;

use App\Accueil;
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
        return view('service');
    }
    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function post(){
        return view('blog-post');
    }
}
