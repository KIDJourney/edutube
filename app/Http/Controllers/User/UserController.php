<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        return User::recent();
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        echo "$user->name" . "<br>";
        echo "$user->open_id". "<br>";
        echo "$user->introduction". "<br>";
        echo $user->favorites;
    }
}
