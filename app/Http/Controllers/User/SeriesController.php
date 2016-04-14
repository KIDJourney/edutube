<?php

namespace App\Http\Controllers\User;

use App\Models\Series;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SeriesController extends Controller
{
    //
    public function index()
    {
        return Series::all();
    }
}
