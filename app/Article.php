<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Article extends Model

{
    use SoftDeletes;

    public $fillable = ['image','titre','contenu'];
    
    public function user(){

        return $this->belongsTo("App\User", "user_id","id");
    }

    public function tags(){
        
        return $this->belongsToMany("App\Tag","tags_has_article","article_id","tags_id");

    }

    public function categories(){
        return $this->belongsTo("App\Categorie","categorie_id","id");
    }
    protected $dates = ['deleted_at'];
}
