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
                        <a href="/#"></a>
                        <div style="opacity: 1; background-image: url({!! $video->cover_url !!});"
                             class="cover-img"></div>
                    </div>
                    <span class="title"><a href="/video">{!! $video->title !!}</a></span>
                </div>
            </li>
            @endforeach
            <li>
                <div class="item">
                    <div class="cover">
                        <div class="meta">
                            <div class="cell"><span class="ui glyphicon glyphicon-play-circle"></span><span>56</span>
                            </div>
                            <div class="cell"></div>
                        </div>
                        <a href="/#"></a>
                        <div style="opacity: 1; background-image: url(http://imgsize.ph.126.net/?enlarge=true&amp;imgurl=http://img2.ph.126.net/KPPo_3RzCad4GFiaPGGW3g==/6630614766910396025.png_122x67x1x95.png);"
                             class="cover-img"></div>
                    </div>
                    <span class="title"><a href="/#">基于案例的中小型网络的架设与维护</a></span>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="cover">
                        <div class="meta">
                            <div class="cell"><span class="ui glyphicon glyphicon-play-circle"></span><span>162</span>
                            </div>
                            <div class="cell"></div>
                        </div>
                        <a href="/#"></a>
                        <div style="opacity: 1; background-image: url(http://g2.ykimg.com/0542010156383E8A6A0A41045468685A);"
                             class="cover-img"></div>
                    </div>
                    <span class="title"><a href="/#">TCP/IP协议分析实验指导</a></span>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="cover">
                        <div class="meta">
                            <div class="cell"><span class="ui glyphicon glyphicon-play-circle"></span><span>112</span>
                            </div>
                            <div class="cell"></div>
                        </div>
                        <a href="/#"></a>
                        <div style="opacity: 1; background-image: url(https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSuuYHPktOr_tRDyFNNC68YxAT3MvaOhqWtFMd0j4R_pUiESVQg);"
                             class="cover-img"></div>
                    </div>
                    <span class="title"><a href="/#">网络编程实验指导</a></span>
                </div>
            </li>
        </ul>
    </div>
    <!-- 分类1--><a href="" style="text-decoration: none;">
        <h2 class="channel-title text-info"><span style="line-height:3.125rem;"
                                                  class="glyphicon glyphicon-menu-right pull-right"></span> 热门课程</h2>
    </a>
    <div class="channel">
        <ul class="channel-in">
            <li>
                <div class="item">
                    <div data-image="http://i2.hdslb.com/320_200/video/71/71d1adcebb297b5cada9041c50d75921.jpg"
                         class="cover">
                        <div class="meta">
                            <div class="cell"><span class="ui glyphicon glyphicon-play-circle"></span><span>125</span>
                            </div>
                            <div class="cell"></div>
                        </div>
                        <a href="/#"></a>
                        <div style="opacity: 1; background-image: url(http://img0.ph.126.net/DWcrwqqvNj66tNc-mMTBnQ==/2774498845454853603.jpg);"
                             class="cover-img"></div>
                    </div>
                    <span class="title"><a href="/#">网页设计与布局</a></span>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="cover">
                        <div class="meta">
                            <div class="cell"><span class="ui glyphicon glyphicon-play-circle"></span><span>116</span>
                            </div>
                            <div class="cell"></div>
                        </div>
                        <a href="/#"></a>
                        <div style="opacity: 1; background-image: url(http://nos.netease.com/edu-image/EE4FB38852A6A9E47B9BF0E97E9F5C0F.png?imageView&amp;thumbnail=450y250&amp;quality=100);"
                             class="cover-img"></div>
                    </div>
                    <span class="title"><a href="/#">计算方法课程设计</a></span>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="cover">
                        <div class="meta">
                            <div class="cell"><span class="ui glyphicon glyphicon-play-circle"></span><span>105</span>
                            </div>
                            <div class="cell"></div>
                        </div>
                        <a href="/#"></a>
                        <div style="opacity: 1; background-image: url(http://img1.ph.126.net/gAbMBx2ACdM-W5PtSe8H-g==/6630809380468073512.png);"
                             class="cover-img"></div>
                    </div>
                    <span class="title"><a href="/#">计算机图形学</a></span>
                </div>
            </li>
            <li>
                <div class="item">
                    <div class="cover">
                        <div class="meta">
                            <div class="cell"><span class="ui glyphicon glyphicon-play-circle"></span><span>110</span>
                            </div>
                            <div class="cell"></div>
                        </div>
                        <a href="/#"></a>
                        <div style="opacity: 1; background-image: url(http://nos.netease.com/edu-image/0398474B0FD9B31905C8DA4F92C5C554-1441949859730?imageView&amp;thumbnail=370y258&amp;quality=100);"
                             class="cover-img"></div>
                    </div>
                    <span class="title"><a href="/#">IOS开发设计</a></span>
                </div>
            </li>
        </ul>
    </div>
@stop