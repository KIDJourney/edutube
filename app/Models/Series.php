<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Video;

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

    public function scopePopular($query)
    {

    }
}