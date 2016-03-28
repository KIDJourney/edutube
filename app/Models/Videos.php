<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    //

    protected $fillable = [
        'title', 'description', 'video_url', 'cover_url'
    ];


    public function author()
    {
        return $this->belongsTo('App\Models\Teacher', 'user_id');
    }

    public function series()
    {
        return $this->belongsTo('App\Models\Series', 'series_id');
    }
}
