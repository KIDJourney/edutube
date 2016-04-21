@extends('user.base')

@section('content')
    <div id="player">
        <div class="player-container">
            <div class="player-box">
                <video id="video" src="{{ $video->video_url  }}" style="width:100%;height:100%;object-fit:cover;"
                       poster="{{ $video->cover_url }}"></video>
                <div class="display">
                    <div class="load-layer"><span class="glyphicon glyphicon-play-circle"></span></div>
                </div>
            </div>
        </div>
    </div>
    <div id="video-footer">
        <div class="btn-control star"><span class="icon-star glyphicon glyphicon-heart-empty"></span> 收藏</div>
        <div class="btn-control comment"><a href="#comment-edit" style="color:#333"><span
                        class="glyphicon glyphicon-pencil"></span> 评论</a></div>
        <div class="btn-control share"><span class="glyphicon glyphicon-send"></span> 分享</div>
    </div>
    <div id="bdshare" style="display:none;" class="bdshare_b"><img id="imgShare" src="../public/img/share.jpg"></div>
    <div class="video-info">
        <div class="video-description">
            <h1 class="video-info-h">{{ $video->title }}</h1>
            <p>{{ $video->description }}</p>
        </div>
        <div class="clear"></div>
        <div class="more-info pull-right"><span class="info-toggle glyphicon glyphicon-menu-down"></span></div>
    </div>
    <div style="display:none;" class="video-info-detail">
        <h1 class="detail-h">详细信息标题</h1>
        <ul class="detail-list">
            <li>
                <label for="">播放：</label>
                <p>{{ $video->watch_count }}</p>
            </li>
            <li>
                <label for="">上传于：</label>
                <p>{{ $video->created_at }}</p>
            </li>
            <li>
                <label for="">收藏：</label>
                <p>{{ $video->favorite_count }}</p>
            </li>
            {{--<li>--}}
            {{--<label for="">详情：</label>--}}
            {{--<p>让你快速精通office的各种常用技能</p>--}}
            {{--</li>--}}
        </ul>
    </div>
    <div class="comment-content">
        <h2 class="comment-head">热门评论</h2>
        <div id="comment-edit" class="comment-edit">
            <textarea id="comment" name="comment" placeholder="说说你的看法..." maxlength="50"
                      class="comment-textarea"></textarea>
            <div class="comment-btn clearfix">
                <button id="btn-reset" class="btn btn-warning btn-sm pull-left">取消</button>
                <p class="comment-limit text-center">　剩余字数：<span id="comment-number">50</span></p>
                <button id="btn-submit" class="btn btn-primary btn-sm pull-right">发表</button>
            </div>
        </div>
        <aside class="comment-list">
            @foreach($video->comments as $comment)
                <div class="comment-wrap clearfix">
                    <div class="author clearfix">
                        <address>{{ $comment->author->name }}</address>
                        <time>{{ $comment->created_at }}</time>
                    </div>
                    <article class="comment-text">{{ $comment->comment }}</article>
                </div>
            @endforeach
        </aside>
        <div class="comment-count"><a href="/">全部评论</a></div>
    </div>
    <div class="media-list">
        <h3 class="ranking-title">精品推荐</h3>
        <ul class="list ranking-body">
            @foreach($sameVideos as $sameVideo)
                @if ($sameVideo->id != $video->id)
                    <li><a href="#" class="list-item in">
                            <div class="l">
                                <div class="cover">
                                    <div style="opacity: 1; background-image: url({!! $sameVideo->cover_url !!});"
                                         class="cover-img"></div>
                                </div>
                            </div>
                            <div class="r">
                                <div class="r-box">
                                    <div class="title">{!! $sameVideo->title !!}</div>
                                    <div class="meta">
                                        <div class="meta-item"><span
                                                    class="icon-meta glyphicon glyphicon-play-circle"></span><span
                                                    class="text-meta">{!! $sameVideo->watch_count !!}</span></div>
                                        <div class="meta-item"><span
                                                    class="icon-meta glyphicon glyphicon-star"></span><span
                                                    class="text-meta">{!! $sameVideo->favorite_count !!}</span></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@stop

@section('script')
    {!!  HTML::script('/js/share.js',['id'=>'bdshare_js']) !!}
    <script type="text/javascript">
        var $comment = $("div.wrapper div.comment-edit #comment");//评论框
        var $commentNumber = $("div.wrapper div.comment-edit p span#comment-number");//评论剩余字数
        var $btnReset = $(".wrapper>.comment-content .comment-btn>#btn-reset");//评论框重置按钮
        var $btnSubmit = $(".wrapper>.comment-content .comment-btn>#btn-submit");//提交按钮
        $btnReset.click(function (event) {
            $comment.val('');
            $commentNumber.text("50");
        });
        var video = document.getElementById("video");//视频element
        //视频播放设置
        $(".display").click(function (event) {
            video.play();
            $(this).hide();
            video.controls = "controls";
        });
        //视频详细信息
        $(".more-info").click(function (event) {
            /* Act on the event */
            $(".video-info-detail").toggle();
            $(".info-toggle").toggleClass('glyphicon-menu-down');
            $(".info-toggle").toggleClass('glyphicon-menu-up');
        });
        //收藏
        $(".star").click(function (event) {
            /* Act on the event */
            $(".icon-star").toggleClass("glyphicon-heart-empty");
            $(".icon-star").toggleClass('glyphicon-heart');
        });
        //分享
        $(".share").click(function (event) {
            var $video = $("video#video");
            var offset = $video.offset();
            var height = $video.height();
            var scrollDistance = offset.top + height;
            //使分享对话框不被video元素覆盖
            $('body,html').animate({scrollTop: scrollDistance}, 600, function () {
                $("#imgShare").click();
            });
        });
        //评论字数限制
        $comment.bind("input propertychange reset", function (event) {
            var length = $(this).val().length;
            $commentNumber.text(50 - length);
        });
    </script>
@stop
