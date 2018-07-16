<?php

namespace App\Http\Controllers;
use App\Events\Contact;
use App\Events\Newsletterform;
use App\Carousel;
use App\Service;
use App\Team;
use App\Client;
use App\Article;
use App\Newsletter;
use App\Categorie;
use App\Commentaire;
use App\Tag;
use App\Projet;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\NewsletterRequest;

class FrontController extends Controller
{
    public function home(){
        $carousels = Carousel::all();
        $services = Service::paginate(3);
        $services2 = Service::paginate(9);
        $teams = Team::all();
        $clients = Client::all();
        return view("index",compact('carousels','services','services2','teams','clients'));

    }

    public function service(){

        $serv = Service::all();
        $services =$serv->random(9);
        $servicess =$serv->random(6);
        $servicesgauche = $servicess->splice(3);
        $servicesdroite = $servicess;
        $projets = Projet::all();
        return view("services",compact("services",'servicesgauche','servicesdroite',"projets"));

    }

    public function blog(){

        $articles = Article::all();
        $categories = Categorie::all();
        $tags = Tag::all();
        return view("blog",compact("articles","categories","tags"));
    }

    public function blogpost(Article $article){
        $categories = Categorie::all();
        $tags = Tag::all();
        return view("blogPost",compact("article","categories","tags"));
    }

    public function contact(){

        return view("contact");
    }

    public function contactform(ContactRequest $request){
        
        event(new Contact($request));
        return redirect()->route("home");

    }

    public function newsletterform(NewsletterRequest $request){
        
        event(new Newsletterform($request));
        $newsletter = new Newsletter;
        $newsletter->email = $request->email;
        $newsletter->save();
        return redirect()->route("home");
    }  
    
    public function commentaireform(Request $request ,$article_id){
        
        $commentaire = new Commentaire;
        $commentaire->name = $request->name;
        $commentaire->email = $request->email;
        $commentaire->subject = $request->subject;
        $commentaire->message = $request->message;
        $commentaire->article_id = $article_id;
        $commentaire->save();
        return redirect()->route("home");

    }

    public function element(){

        return view("element");
    }
}
