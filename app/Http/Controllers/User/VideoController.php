<?php

namespace App\Http\Controllers\User;

use App\Models\Video;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VideoController extends Controller
{
    //

    public function index()
    {
        return view('user.video',['title'=>'观看']);
    }

    public function show($id)
    {
        $video = Video::findOrFail($id);
        return view('user.video',['video'=>$video,'title'=>$video->title]);
    }


}
