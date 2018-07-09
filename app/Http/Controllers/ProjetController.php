<?php

namespace App\Http\Controllers;

use App\Projet;
use Illuminate\Http\Request;
use App\Services\ImageResize;
use Image;
use Storage;

class ProjetController extends Controller
{
    public function __construct(ImageResize $imageResize){
        $this->imageResize = $imageResize;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::paginate(3);
        return view('admin.projet.index',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.projet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projet = new projet;
        $projet->titre = $request->titre;
        $projet->contenu = $request->contenu;
        $projet->url = $request->url;
        $arg = [
            'request' => $request->image,
            'disk' => 'ProjetImageResize',
            'x' => 200
        ];
        $projet->image = $this->imageResize->imageStore($arg);

        if ($projet->save())
        {
            return redirect()->route("projet.index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show(Projet $projet)
    {
        return view('admin.projet.show',compact('projet'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        return view('admin.projet.edit',compact('projet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projet $projet)
    {
        $projet->titre = $request->titre;
        $projet->contenu = $request->contenu;
        $projet->url =$request->url;
        if($request->image != null){
            $projet->image =$this->imageResize->imageDestroy($projet->image);
        $arg = [
            'request' => $request->image,
            'disk' => 'ProjetImageResize',
            'x' => 400
        ];
        $projet->image = $this->imageResize->imageStore($arg);
        }
        if($projet->save()){
            return redirect()->route('projet.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        $projet->image =$this->imageResize->imageDestroy($projet->image);
        if($projet->delete()){
            return redirect()->route('projet.index');
        }
    }
}
