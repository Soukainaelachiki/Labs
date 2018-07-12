<?php

namespace App\Http\Controllers;
use App\Carousel;
use App\Service;
use App\Team;
use App\Client;
use Illuminate\Http\Request;

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
        return view("services");

    }

    public function blog(){

        return view("blog");
    }

    public function contact(){

        return view("contact");

    }

    public function element(){

        return view("element");
    }
}
