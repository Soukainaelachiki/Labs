<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Services\ImageResize;
use Image;
use Storage;

class ClientController extends Controller
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
        $client = Client::all();
        return view('admin.client.index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $client->name = $request->name;
        $client->compagnie = $request->compagnie;
        $client->testimonial = $request->testimonial;
        $client->email = $request->email;
        
        $arg = [
            'request' => $request->image,
            'disk' => 'ClientImageResize',
            'x' => 500
        ];
        $client->image = $this->imageResize->imageStore($arg);
      
        if ($client->save()){
            return redirect()->route('client.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('admin.client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('admin.client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->name = $request->name;
        $client->email = $request->email;
        $client->compagnie = $request->compagnie;
        $client->testimonial = $request->testimonial;

        if($request->image != null){
        $client->image =$this->imageResize->imageDestroy($client->image);
        $arg = [
            'request' => $request->image,
            'disk' => 'ClientImageResize',
            'x' => 200
        ];
        $client->image = $this->imageResize->imageStore($arg);
        }

        if($client->save()){
            return redirect()->route('client.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->image =$this->imageResize->imageDestroy($client->image);
        if($client->delete()){
            return redirect()->route('client.index');
        }
    }
}
