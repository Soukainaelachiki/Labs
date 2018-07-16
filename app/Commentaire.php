<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function article(){

        return $this->belongsTo("App\Commentaire","article_id","id");
    }
}
