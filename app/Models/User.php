<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','introduction','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function favorites()
    {
        return $this->belongsToMany('App\Models\Video','favorites','user_id','video_id');
    }

    public function comment()
    {
        return $this->hasMany('App\Models\comment','user_id');
    }

    public function scopeRecent($query , $limit = 30)
    {
        return $query->orderBy('created_at','desc')
            ->paginate($limit);
    }


}
