<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zonetext;

class ZonetextController extends Controller
{
    public function index(){

        $zonetexts = Zonetext::all();
        return view('admin.text.index',compact('zonetexts'));
    }


    public function create(){
        return view('admin.text.create');

    }


    public function store(Request $request){
        $zonetext = new Zonetext;
        $zonetext->contenu = $request->contenu;
        if ($zonetext->save()){
            return redirect()->route("text.index");
        }
        
    }


    public function edit($zonetext){
        $zonetext = Zonetext::find($zonetext);
      return view('admin.text.edit', compact('zonetext'));  
    }


    public function update(Request $request, $zonetext){
        $zonetext = Zonetext::find($zonetext);
        $zonetext->contenu = $request->contenu;
        if($zonetext->save()){
            return redirect()->route('text.index');
        }

    }
    public function destroy($zonetext){


        $zonetext = Zonetext::find($zonetext);
        if ($zonetext->delete()){
            return redirect()->route('text.index');
        }

    }
}
