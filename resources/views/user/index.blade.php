@extends('base')

@section('
<body>
	<nav class="nav-bar">
		<div class="nav-wrap">
			<span class="nav-heading">微课堂</span>
			<a href="./login.html" class="pull-rights" style="color:#999;">
				<span class="glyphicon glyphicon-user nav-icon" aria-hidden="true"></span>
			</a>
			<span class="glyphicon glyphicon-search pull-right nav-icon" aria-hidden="true"></span>	
		</div>
	</nav>
	<div class="wrapper">
		<div id="div-search" style="display:none;">
			<form class="search-form">
				<input type="text" name="keyword">
				<input type="submit" value="搜索">
			</form>
		</div>
		<img src="public/img/logo.jpg" alt="" style="width:100%;">
		<h2 class="channel-title text-info">排行榜</h2>
		<div class="channel">
			<ul class="channel-in">
				<li>
					<div class="item">
						<div class="cover" data-image="http://i2.hdslb.com/320_200/video/d9/d96916cfe1401f040e168d0517751102.jpg">
							<div class="meta">
								<div class="cell">
									<span class="ui glyphicon glyphicon-play-circle"></span>
									<span>100</span>
								</div>
								<div class="cell"></div>
							</div>
							<a href="/#"></a>
							<div class="cover-img" style="opacity: 1; background-image: url(http://i1.51cto.com/wyfs02/M01/2B/4E/wKiom1OG-MuC8hgBAAEfhBp07eU225_middle.jpg);"></div>
						</div>
						<span class="title">
							<a href="/#">计算机网络原理实验指导</a>
						</span>
					</div>
				</li>
				<li>
					<div class="item">
						<div class="cover">
							<div class="meta">
								<div class="cell">
									<span class="ui glyphicon glyphicon-play-circle"></span>
									<span>56</span>
								</div>
								<div class="cell"></div>
							</div>
							<a href="/#"></a>
							<div class="cover-img" style="opacity: 1; background-image: url(http://imgsize.ph.126.net/?enlarge=true&imgurl=http://img2.ph.126.net/KPPo_3RzCad4GFiaPGGW3g==/6630614766910396025.png_122x67x1x95.png);"></div>
						</div>
						<span class="title">
							<a href="/#">基于案例的中小型网络的架设与维护</a>
						</span>
					</div>
				</li>	
				<li>
					<div class="item">
						<div class="cover">
							<div class="meta">
								<div class="cell">
									<span class="ui glyphicon glyphicon-play-circle"></span>
									<span>162</span>
								</div>
								<div class="cell"></div>
							</div>
							<a href="/#"></a>
							<div class="cover-img" style="opacity: 1; background-image: url(http://g2.ykimg.com/0542010156383E8A6A0A41045468685A);"></div>
						</div>
						<span class="title">
							<a href="/#">TCP/IP协议分析实验指导</a>
						</span>
					</div>
				</li>
				<li>
					<div class="item">
						<div class="cover">
							<div class="meta">
								<div class="cell">
									<span class="ui glyphicon glyphicon-play-circle"></span>
									<span>112</span>
								</div>
								<div class="cell"></div>
							</div>
							<a href="/#"></a>
							<div class="cover-img" style="opacity: 1; background-image: url(https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSuuYHPktOr_tRDyFNNC68YxAT3MvaOhqWtFMd0j4R_pUiESVQg);"></div>
						</div>
						<span class="title">
							<a href="/#">网络编程实验指导</a>
						</span>
					</div>
				</li>
			</ul>
		</div>
		<!-- 分类1 -->
		<a href="" style="text-decoration: none;">
			<h2 class="channel-title text-info">
				<span class="glyphicon glyphicon-menu-right pull-right" style="line-height:3.125rem;"></span>
			热门课程
			</h2>
		</a>
		<div class="channel">
			<ul class="channel-in">
				<li>
					<div class="item">
						<div class="cover" data-image="http://i2.hdslb.com/320_200/video/71/71d1adcebb297b5cada9041c50d75921.jpg">
							<div class="meta">
								<div class="cell">
									<span class="ui glyphicon glyphicon-play-circle"></span>
									<span>125</span>
								</div>
								<div class="cell"></div>
							</div>
							<a href="/#"></a>
							<div class="cover-img" style="opacity: 1; background-image: url(http://img0.ph.126.net/DWcrwqqvNj66tNc-mMTBnQ==/2774498845454853603.jpg);"></div>
						</div>
						<span class="title">
							<a href="/#">网页设计与布局</a>
						</span>
					</div>
				</li>
				<li>
					<div class="item">
						<div class="cover">
							<div class="meta">
								<div class="cell">
									<span class="ui glyphicon glyphicon-play-circle"></span>
									<span>116</span>
								</div>
								<div class="cell"></div>
							</div>
							<a href="/#"></a>
							<div class="cover-img" style="opacity: 1; background-image: url(http://nos.netease.com/edu-image/EE4FB38852A6A9E47B9BF0E97E9F5C0F.png?imageView&thumbnail=450y250&quality=100);"></div>
						</div>
						<span class="title">
							<a href="/#">计算方法课程设计</a>
						</span>
					</div>
				</li>	
				<li>
					<div class="item">
						<div class="cover">
							<div class="meta">
								<div class="cell">
									<span class="ui glyphicon glyphicon-play-circle"></span>
									<span>105</span>
								</div>
								<div class="cell"></div>
							</div>
							<a href="/#"></a>
							<div class="cover-img" style="opacity: 1; background-image: url(http://img1.ph.126.net/gAbMBx2ACdM-W5PtSe8H-g==/6630809380468073512.png);"></div>
						</div>
						<span class="title">
							<a href="/#">计算机图形学</a>
						</span>
					</div>
				</li>
				<li>
					<div class="item">
						<div class="cover">
							<div class="meta">
								<div class="cell">
									<span class="ui glyphicon glyphicon-play-circle"></span>
									<span>110</span>
								</div>
								<div class="cell"></div>
							</div>
							<a href="/#"></a>
							<div class="cover-img" style="opacity: 1; background-image: url(http://nos.netease.com/edu-image/0398474B0FD9B31905C8DA4F92C5C554-1441949859730?imageView&thumbnail=370y258&quality=100);"></div>
						</div>
						<span class="title">
							<a href="/#">IOS开发设计</a>
						</span>
					</div>
				</li>
			</ul>
		</div>
	</div>

    <footer class="container-fluid text-center footer text-muted">
		<p>底部</p>
	</footer>
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script type="text/javascript">
	$(".glyphicon-search").click(function(event) {
			/* Act on the event */
			$("#div-search").toggle();
	});
	</script>
</body>
</html>