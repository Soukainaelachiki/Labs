<?php

namespace App\Http\Controllers;
use Image;
use Illuminate\Http\Request;
use App;
use App\Carousel;
use App\services\ImageResize;
use Storage;


class CarouselController extends Controller
{
    public function __construct(ImageResize $imageResize){
        $this->imageResize = $imageResize;
    }

    public function index(){
        
        $carousels = Carousel::All();
        return view('admin.carousel.index', compact('carousels'));
    }  
    
    public function create(){

        return view('admin.carousel.create');

    }

    public function store(Request $request){

        $carousel = new Carousel;

        if($request->image != null){

            $arg = [
                'request' => $request->image,
                'disk' => 'CarouselImageResize',
                'x' => 100
            ];

            $carousel->image = $this->imageResize->imageStore($arg);

        }

        if($carousel->save()){
            return redirect()->route('carousel.index');
        }

    }

    public function destroy(Carousel $carousel){

        $carousel->image = $this->imageResize->imageDestroy($carousel->image);
        if($carousel->delete()){
            return redirect()->route('carousel.index');
        }

    }


}
