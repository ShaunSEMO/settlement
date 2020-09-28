<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project_img extends Model
{
    protected $gaurded = [];
    
    public function project() {
        return $this->belongsTo('App\Project');
    }
}
