<?php

namespace App\Services;
use Image;
use Storage;
use App;

class ImageResize {

    public function imageStore($image){
        $image->store('','CarouselImage'); 
        $Duplimage = $image->store('','CarouselImageResize');
        
        $resize = Image::make(Storage::disk('CarouselImageResize')->path($Duplimage))->resize(300,null,function($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        $resize->save();
        return $Duplimage; 
        }


    public function imageDestroy($image){

        Storage::disk('CarouselImageResize')->delete($image);
        Storage::disk('CarouselImage')->delete($image);

        }

}