<?php

namespace App\Http\Controllers;

use App\Service;
use App\Icon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::with('icon')->get();
        
        return view("admin.service.index",compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons =Icon::paginate(10);
        return view("admin.service.create",compact('services','icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->titre = $request->titre;
        $service->contenu = $request->contenu;
        $service->icon_id = $request->name;
        if ($service->save())
        {
            return redirect()->route("service.index");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        
        return view("admin.service.show",compact("service"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $icons =Icon::paginate(10);
        return view('admin.service.edit',compact('service','icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->titre = $request->titre;
        $service->contenu = $request->contenu;
        $service->icon_id = $request->name;
        if ($service->save())
        {
            return redirect()->route("service.index");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if($service->delete()){
            return redirect()->route('service.index');
        }
    }
}
