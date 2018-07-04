<?php

namespace App\Services;
use Image;
use Storage;
use App;

class ImageResize {

    public function imageStore($arg){
        $arg['request']->store('','OriginalImage'); 
        $Duplimage = $arg['request']->store('', $arg['disk']);

        $resize = Image::make(Storage::disk($arg['disk'])->path($Duplimage))->resize($arg['x'],null,function($constraint){
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $resize->save();
        return $Duplimage; 
    
        }


    public function imageDestroy($image){

        Storage::disk('CarouselImageResize')->delete($image);
        Storage::disk('OriginalImage')->delete($image);

        }

}