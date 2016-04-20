<?php

namespace App\Http\Controllers\User;

use App\Models\Video;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct(Video $video)
    {
//        parent::__construct();
        $this->video = $video;
    }

    //
    public function index()
    {
        $series_top= $this->video->topPlayedPerSeries();
        $videos = Video::popular();
        return view('user.index',['title'=>'主页','videos'=>$videos,'series_top'=>$series_top]);
    }


//    public function test()
//    {
//        return view('user.test');
//    }
}
