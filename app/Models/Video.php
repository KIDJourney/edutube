<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //

    protected $fillable = [
        'title', 'description', 'video_url', 'cover_url'
    ];

    public function author()
    {
        return $this->belongsTo('App\Models\Teacher', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'video_id');
    }

    public function favoriteBy()
    {
        return $this->belongsToMany('App\Models\User', 'favorites', 'video_id', 'user_id');
    }

    public function series()
    {
        return $this->belongsTo('App\Models\Series', 'series_id');
    }

    public function topPlayedPerSeries($limit = 30)
    {
        return $this->groupBy('series_id')->orderBy('watch_count', 'desc')
            ->paginate($limit);
    }

    public function sameSeriesVideo($limit=30)
    {
        return $this->series->videos()->popular($limit);
    }

    public function scopeRecent($query, $limit = 30)
    {
        return $query->orderBy('created_at', 'desc')
            ->paginate($limit);
    }

    public function scopePopular($query, $limit = 30)
    {
        return $query->orderBy('watch_count', 'desc')
            ->paginate($limit);
    }
}
