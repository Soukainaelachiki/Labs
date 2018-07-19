<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use App\Services\ImageResize;


class TeamController extends Controller
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
        $teams = Team::all();
        return view('admin.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team = new Team;
        $team->name = $request->name;
        $team->profession = $request->profession;
        $arg = [
            'request' => $request->photo,
            'disk' => 'TeamImageResize',
            'x' => '',
        ];
        $team->photo = $this->imageResize->imageStore($arg);
        if($team->save()){
            return redirect()->route("team.index")->with([
                "status"=> "success",
                "message"=> "Votre personnel a bien été ajouté"
                ]);
        }else{
            return redirect()->route("team.index")->with([
                "status"=> "danger",
                "message"=> "Une erreur est survenue"
                ]);     
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        return view('admin.team.show', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $team->name = $request->name;
        $team->profession = $request->profession;
        if($request->image != null){
            $team->image =$this->imageResize->imageDestroy($team->image);
        $arg = [
            'request' => $request->photo,
            'disk' => 'TeamImageResize',
            'x' => '',
        ];
        $team->photo = $this->imageResize->imageStore($arg);
        }
        if($team->save()){
            return redirect()->route("team.index")->with([
                "status"=> "success",
                "message"=> "Votre team a bien été modifié"
                ]);
        }else{
            return redirect()->route("team.index")->with([
                "status"=> "danger",
                "message"=> "Une erreur est survenue"
                ]);     
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->photo =$this->imageResize->imageDestroy($team->photo);
        if($team->delete()){
            return redirect()->route("team.index")->with([
                "status"=> "success",
                "message"=> "Votre personnel a bien été supprimé"
                ]);
        }else{
            return redirect()->route("team.index")->with([
                "status"=> "danger",
                "message"=> "Une erreur est survenue"
                ]);     
        }
    }
}
