<?php

namespace App\Http\Controllers\User;

use App\Models\Video;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        $videos = Video::all()->popular()->limit(0,10);
        return view('user.index',['title'=>'主页','videos'=>$videos]);
    }


//    public function test()
//    {
//        return view('user.test');
//    }
}
