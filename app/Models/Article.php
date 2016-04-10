<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

    //posts table in database
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo('App\Models\User','author_id');
    }
    
}
