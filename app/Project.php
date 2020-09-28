<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $gaurded = [];
    
    public function images() {
        return $this->hasMany('App\Project_img');
    }
}
