<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:62:"F:\thinkphp5\public/../application/index\view\index\index.html";i:1516798983;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<title>HJB博客</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo STATIC_CSS; ?>/iconfont.css">
	<link rel="stylesheet" type="text/css" href="<?php echo STATIC_CSS; ?>/index.css">

	<link rel="icon" href="<?php echo STATIC_IMG; ?>/indexfavicon.ico" />
	<script type="text/javascript" src="<?php echo STATIC_JS; ?>/vue.js"></script>

</head>
<body >
<div id="vue-getid" v-on:touchstart="touchstart" v-on:touchend="touchend">
	<div class="menu" v-bind:style="menuTouchwidth">
		<div class="left-menu">
			<div class="top-img">
				<a href="">
					<img src="<?php echo STATIC_IMG; ?>/me.jpg">
				</a>
				<p class="text-center myname">HuJingBang</p>
			</div>
			<div class="bottom-nav text-center">
				<ul class="nav">
					<li>
						<a href="">
							<i class="icon iconfont icon-cangneishicao"></i>
							<span>首页</span>
						</a>
					</li>
					<li>
						<a href="">
							<i class="icon iconfont icon-image-text"></i>
							<span>个人信息</span>
						</a>
					</li>
					<li>
						<a href="">
							<i class="icon iconfont icon-edit"></i>
							<span>留言板</span>
						</a>
					</li>
					<li>
						<a href="">
							<i class="icon iconfont icon-text"></i>
							<span>我的文章</span>
						</a>
					</li>
					<li>
						<a href="">
							<i class="icon iconfont icon-image"></i>
							<span>相册</span>
						</a>
					</li>
					<li>
						<a href="">
							<i class="icon iconfont icon-group"></i>
							<span>登录</span>
						</a>
					</li>
					<li>
						<a href="">
							<i class="icon iconfont icon-register-o"></i>
							<span>注册</span>
						</a>
					</li>
				</ul>
				
			</div>
		</div>
	</div>
	<div class="right-content">
		<div class="header-banner">
			<img src="<?php echo STATIC_IMG; ?>/hjblogo.png" id="hjblogo">
			<span>
				<input type="text" name="" v-bind:style="inputwidth" placeholder="搜索文章"><i class="icon iconfont icon-search" v-on:click="search"></i>
			</span>
		</div>
		<div class="content-article">
			<ul class="article">
				<li>
					<h3><a href="">我的女朋友</a></h3>
					<p>当我在那天遇到你的时候,我已经深深的爱上你了,因为你在我眼里是最美丽的,没人可以比的上,当我在那天遇到你的时候,我已经深深的爱上你了,当我在那天遇到你的时候,我已经深深的爱上你了.....</p>
					<i><b>发布时间:</b>2018-01-24</i>
					<a href="" id="readAll">阅读全文</a>
				</li>
				<li>
					<h3><a href="">我的女朋友</a></h3>
					<p>当我在那天遇到你的时候,我已经深深的爱上你了,因为你在我眼里是最美丽的,没人可以比的上,当我在那天遇到你的时候,我已经深深的爱上你了,当我在那天遇到你的时候,我已经深深的爱上你了.....</p>
					<i><b>发布时间:</b>2018-01-24</i>
					<a href="" id="readAll">阅读全文</a>
				</li>
				<li>
					<h3><a href="">我的女朋友</a></h3>
					<p>当我在那天遇到你的时候,我已经深深的爱上你了,因为你在我眼里是最美丽的,没人可以比的上,当我在那天遇到你的时候,我已经深深的爱上你了,当我在那天遇到你的时候,我已经深深的爱上你了.....</p>
					<i><b>发布时间:</b>2018-01-24</i>
					<a href="" id="readAll">阅读全文</a>
				</li>
				<li>
					<h3><a href="">我的女朋友</a></h3>
					<p>当我在那天遇到你的时候,我已经深深的爱上你了,因为你在我眼里是最美丽的,没人可以比的上,当我在那天遇到你的时候,我已经深深的爱上你了,当我在那天遇到你的时候,我已经深深的爱上你了.....</p>
					<i><b>发布时间:</b>2018-01-24</i>
					<a href="" id="readAll">阅读全文</a>
				</li>
				<li>
					<h3><a href="">我的女朋友</a></h3>
					<p>当我在那天遇到你的时候,我已经深深的爱上你了,因为你在我眼里是最美丽的,没人可以比的上,当我在那天遇到你的时候,我已经深深的爱上你了,当我在那天遇到你的时候,我已经深深的爱上你了.....</p>
					<i><b>发布时间:</b>2018-01-24</i>
					<a href="" id="readAll">阅读全文</a>
				</li>
			</ul>
		</div>
	</div>
</div>
	<script type="text/javascript">
		new Vue({
			el:"#vue-getid",
			data:{
				inputwidth:{
					width:"0px"
				},
				menuTouchwidth:{
					width:""
				},
				clientstart_X:'',
				clientstart_Y:""

			},
			methods:{
				search:function () {
					var bannerHeight = document.getElementsByClassName('header-banner')[0].offsetHeight;
					console.log(bannerHeight);
					if(bannerHeight != "90") {
						if(this.inputwidth.width == "200px") {
						this.inputwidth.width="0px";
					}else{
						this.inputwidth.width="200px";
					}	
				}else{
						if(this.inputwidth.width == "100px") {
							this.inputwidth.width="0px";
						}else{
						
							this.inputwidth.width="100px";
						}
				}
			},
			touchstart:function (event) {
				var clientxstart = event.changedTouches[0].clientX;
				var clientystart = event.changedTouches[0].clientY;
				this.clientstart_X = clientxstart;
				this.clientstart_Y = clientystart;
			},
			touchend:function(event){
				var clientxend = event.changedTouches[0].clientX;
				var clientyend = event.changedTouches[0].clientY;
				var   distanceX = this.clientstart_X - clientxend;
				var   distanceY = this.clientstart_Y - clientyend;
				console.log(distanceX +"   "+ distanceY)
				if(Math.abs(distanceX ) >= Math.abs(distanceY)) {
 					if (distanceX > 60) {
						this.menuTouchwidth.width="0px";
					}else if(distanceX < -60){
						this.menuTouchwidth.width="150px";
					}
				}
			}
	
		 }
		});
	</script>
</body>
</html>