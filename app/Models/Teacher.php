<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    protected $fillable = [
        'name', 'password', 'introduction'
    ];

    protected $hidden = [
        'password'
    ];

    public function videos()
    {
        return $this->hasMany('App\Models\Video','user_id');
    }

}
