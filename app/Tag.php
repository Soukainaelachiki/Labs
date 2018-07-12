<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function blog(){
        
         return $this->belongsToMany('App\article',"tags_has_article","tags_id","article_id");
    }
}
