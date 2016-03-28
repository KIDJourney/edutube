<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    //
    protected $fillable = [
        'name','description'
    ];

    public function videos()
    {
        return $this->hasMany('App\Models\Video','series_id');
    }


}
