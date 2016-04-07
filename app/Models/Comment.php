<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function video()
    {
        return $this->belongsTo('App\Models\Video','video_id');
    }

    public function author()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
