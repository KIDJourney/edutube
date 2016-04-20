@extends('user.base')
@section('content')
    <h2 class="channel-title text-info">排行榜</h2>
    <div class="channel">
        <ul class="channel-in">

            @foreach($videos as $video)
            <li>
                <div class="item">
                    <div data-image="http://i2.hdslb.com/320_200/video/d9/d96916cfe1401f040e168d0517751102.jpg"
                         class="cover">
                        <div class="meta">
                            <div class="cell"><span class="ui glyphicon glyphicon-play-circle"></span><span>100</span>
                            </div>
                            <div class="cell"></div>
                        </div>
                        <a href="{!! url('video',$video->id) !!}"></a>
                        <div style="opacity: 1; background-image: url({!! $video->cover_url !!});"
                             class="cover-img"></div>
                    </div>
                    <span class="title"><a href="{!! url('video',$video->id)  !!}">{!! $video->title !!}</a></span>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    <!-- 分类1--><a href="" style="text-decoration: none;">
        <h2 class="channel-title text-info"><span style="line-height:3.125rem;"
                                                  class="glyphicon glyphicon-menu-right pull-right"></span> 热门课程</h2>
    </a>
    <div class="channel">
        <ul class="channel-in">
            @foreach($series_top as $video)
                <li>
                    <div class="item">
                        <div data-image="http://i2.hdslb.com/320_200/video/d9/d96916cfe1401f040e168d0517751102.jpg"
                             class="cover">
                            <div class="meta">
                                <div class="cell"><span class="ui glyphicon glyphicon-play-circle"></span><span>100</span>
                                </div>
                                <div class="cell"></div>
                            </div>
                            <a href="{!! url('video',$video->id)  !!}"></a>
                            <div style="opacity: 1; background-image: url({!! $video->cover_url !!});"
                                 class="cover-img"></div>
                        </div>
                        <span class="title"><a href="{!! url('video',$video->id)  !!}">{!! $video->title !!}</a></span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@stop