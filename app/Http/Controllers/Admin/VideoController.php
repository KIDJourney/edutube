<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Qiniu\Auth;

class VideoController extends Controller
{
    //
    public function index()
    {
        $bucket = env('BUCKET');
        $ak = env('AccessKey');
        $sk = env('SecretKey');

        $auth = new Auth($ak, $sk);

        $policy = array(
            'callbackUrl' => env('CallBackUrl'),
            'callbackBody' => '{"fname":"$(fname)", "fkey":"$(key)", "desc":"$(x:desc)", "uid":' . "Test" . '}'
        );


        $upToken = $auth->uploadToken($bucket, null, 3600, $policy);
        echo <<<HTML
<form method="post" action="http://up.qiniu.com" enctype="multipart/form-data">
  <input name="token" type="hidden" value="$upToken">
  <input name="file" type="file" />
  <input type="submit" value="上传"/>
</form>  
HTML;
    }

    public function callback(Request $request)
    {
        dd($request->all());
    }
}
