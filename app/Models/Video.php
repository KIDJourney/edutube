<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //

    protected $fillable = [
        'title', 'description', 'video_url', 'cover_url'
    ];


    public function scopeRecent($query)
    {
        return $query->orderBy('created_at','desc');
    }

    public function author()
    {
        return $this->belongsTo('App\Models\Teacher', 'user_id');
    }

    public function series()
    {
        return $this->belongsTo('App\Models\Series', 'series_id');
    }

}
