<!DOCTYPE html>
<html>

<head>
		<meta charset="utf-8">
		<title>EnglishOnlien</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<!-- Le styles -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-theme.css">
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/skin-select.css">
		<link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/minus.png">
</head>
<!--

									..
						 .,122,
				.,1233332.
		.1223333333,            ,2.
 .2333333333331           ,351                 .....  .....          ,,,         ,,             ..          ...............
,2333333333333          ,4553                2322222332222233.      23333,  .1, .33.      ,33.  232        122222222222222232
	,23333333333         25545,                23,   .33.   .33.    ,33,  132,132 .33.     133,    232.      ............... 22
		.,233333331       254445.                2322222332222233.  1332,....,22132 .33.   ,232.      ,331.   1222222222222222.22
			 .,2333332,    ,5444451                23,....33.....33.  12332222232 ,32 .33. ,233,  .11     13321   ..,,,,,,,..    22
					.,2333321, 15444444.               2322222322222233.   .33    ,32 ,32 .33. 12,   .332       ,1,   23211111133,   22
						 .,2333333344444541             .11.,,.132.   .21    .33,111331 ,32 .33.      ,33,  .21         23,      23,   22
								 1333333333334431,          23, 33. ,33  11231.  .33.111,.1,,21 .33.    .131     133,       23211111133,   22
									13333333333333333321,,.  232 .33,  .. 132 ,32. .33.    ,33.   ,33.  .133311111113331      231,,,,,,,,.  .32
								 .233333333333333221,,.    ,,   1322222232.       132222232,.222231   .2211111111,,,232               2222331
							 ,23333333333211,.                                                                                       ..
						.1333333221,,.                                .                       .        .    .
				 .1233211,.
			.,11,..

-->
<body>
<div id="ModleByall"></div>
<div id="moveDiv" style="min-width:200px;min-height:150px;position:absolute;display:none;z-index:1;" class="panel panel-default">
	<div class="panel-heading bg-info" id="WordByTran">查询文字</div>
	<div class="panel-body">
		<div class="SelectWordReturn well" id="returnCheck" style="color: #000!important;">
			翻译结果
		</div>
	</div>
</div>
<img src="<?php echo base_url();?>assets/ico/minus.png" class="pull-left" alt="logn">
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav role="navigation" class="navbar navbar-static-top">
				<div class="container-fluid">
						<!-- Collect the nav links, forms, and other content for toggling -->
					<h1 class="nav navbar-nav">ENGLISHONLIEN</h1>

					<ul class="nav navbar-right">
							<li class="dropdown">
								 <a data-toggle="dropdown" class="dropdown-toggle" href="#">
									<img alt="头像" class="admin-pic img-circle" src="<?php echo base_url();?>assets/img/UserIMG/user.png">
									<span color="#FFF">你好!管理员 </span><b class="caret"></b>
								</a>
									<ul class="dropdown-menu" style="margin-top:1px;">
										<li >
												<a href="#">
														<span class="glyphicon glyphicon-user"></span>&#160;&#160;个人中心
												</a>
										</li>
										<li >
											<a href="#">
													<span class="glyphicon glyphicon-star-empty"></span>&#160;&#160; 签到
											</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="<?php echo site_url('Welcome/logout');?>">
													<span class="glyphicon glyphicon-off"></span>&#160;&#160;退出
											</a>
										</li>
									</ul>
							</li>
							<li>
								<a href="#"  data-toggle="dropdown" class="dropdown-toggle">
									<button class="btn btn-info glyphicon glyphicon-ok-circle" onclick="select(document, tanchu, 1, checkWord, '<?php echo site_url('/TranWord/'); ?>')" title="开启屏幕选词翻译">开</button>
									<button class="btn btn-danger glyphicon glyphicon-ban-circle" onclick="select(document, tanchu, 0)" title="关闭屏幕选词翻译">关</button>
								</a>
							</li>
					</ul>
						<!-- /.navbar-collapse -->
				</div>
				<!-- /.container-fluid -->
			</nav>
		</div>
	</div>
</div>
		<!-- /END OF TOP NAVBAR -->
<div class="container">
	<div class="row clearfix">
		<div class="col-md-3 column">
			<!-- SIDE MENU -->
				<div class="dark">
						<input type="text" name="search" id="searchWord" onblur="checkWord(this.value,'ReturnResult','<?php echo site_url('/TranWord/');?>');" class="search" placeholder="单词翻译。。。" >
						<span class="id_search"></span>
						<div>翻译结果：<div id="ReturnResult"></div></div>
				</div>

				<div class="text-center navbar-header navbar-inverse nav-title ">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#">
						<span class="glyphicon glyphicon-home" style="font-size:17px;">主页</span>
					</a>
				</div>

				<div class="skin-part">
					<div class="collapse navbar-collapse navbar-left is-collapse">
						<div class="side-bar">
							<ul class="topnav menu-left-nest">
									<li>
											<a href="#" class="title-menu-left">
													<span>功能</span>
											</a>
									</li>

									<li>
											<a href="<?php echo site_url('GoView/show/');?>Basics/TranWordWeb" title="翻译">
													<i class="glyphicon glyphicon-book"></i>
													<span>翻译</span>
											</a>
									</li>
									<li>
											<a href="<?php echo site_url('GoView/show/');?>Basics/ArticleWeb" title="文章">
													<i class="glyphicon glyphicon-file"></i>
													<span>文章</span>

											</a>
									</li>
									<li>
											<a href="<?php echo site_url('GoView/show/');?>Basics/LearnWordWeb" title="单词学习">
													<i class="glyphicon glyphicon-eye-open"></i>
													<span>单词学习</span>

											</a>
									</li>
									<li>
											<a href="<?php echo site_url('GoView/show/');?>Basics/RankingListWeb" title="排行榜">
													<i class="glyphicon glyphicon-stats"></i>
													<span>排行榜</span>

											</a>
									</li>
									<li>
											<a href="<?php echo site_url('GoView/show/');?>Basics/MessageWeb" title="留言">
													<i class="glyphicon glyphicon-comment"></i>
													<span>留言</span>
											</a>
									</li>

									<li>
											<a href="<?php echo site_url('GoView/show/');?>Basics/NoticeWeb" title="公告">
													<i class="glyphicon glyphicon-bullhorn"></i>
													<span>公告</span>
											</a>
									</li>

									<li>
											<a href="<?php echo site_url('GoView/show/');?>Basics/AboutUsWeb" title="关于我们">
													<i class="glyphicon glyphicon-link"></i>
													<span>关于我们</span>
											</a>

									</li>
							</ul>

							<ul id="menu-showhide" class="topnav menu-left-nest">
									<li>
											<a href="#" style="border-left:0px solid!important;" class="title-menu-left">
													<span>高级管理</span>
											</a>
									</li>
									<li>
											<a href="<?php echo site_url('GoView/show/');?>Senior/UserManageWeb" title="用户管理">
													<i class="glyphicon glyphicon-user"></i>
													<span>用户管理</span>
											</a>
									</li>
									<li>
											<a href="<?php echo site_url('GoView/show/');?>Senior/WordManageWeb" title="词库管理">
													<i class="glyphicon glyphicon-hdd"></i>
													<span>词库管理</span>
											</a>
									</li>
									<li>
											<a href="<?php echo site_url('GoView/show/');?>Senior/MessageManageWeb" title="词库管理">
													<i class="glyphicon glyphicon-edit"></i>
													<span>留言管理</span>
											</a>
									</li>
									<li>
											<a href="<?php echo site_url('GoView/show/');?>Senior/ListManageWeb" title="排行榜管理">
													<i class="glyphicon glyphicon-stats"></i>
													<span>排行榜管理</span>
											</a>
									</li>

									<li>
											<a href="<?php echo site_url('GoView/show/');?>Senior/SecurityManageWeb" title="安全管理">
													<i class="glyphicon glyphicon-exclamation-sign"></i>
													<span>安全管理</span>
											</a>
									</li>
							</ul>
						</div>
					</div>
				</div>
			<!-- END OF SIDE MENU -->
		</div>
		<div class="col-md-8 column ">
			<div class="paper-wrap bevel tlbr" style="height:700px!important; color:#000;">
				<div class="row clearfix">
					<div class="text-right">
						<span class="glyphicon glyphicon-home"></span>主页
						<hr style="border:1px solid #dfd9d9;">
					</div>
					<div class="body-nest">
						sssssssssssssss
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container ">
	<hr>
	<footer class="text-center">
		<p>Copyright &copy; 2017 SOVO思创</p>
	</footer>
</div>

	<script type="text/javascript">
		// function checkWord(ReturnDiv="", WordType="") {
		// 	var word = document.getElementById('searchWord').value;
		// 	v = encodeURIComponent(word);
		// 	var info = "word="+v;
		// 	var TW = new XMLHttpRequest();
		// 	TW.onreadystatechange = function(){
		// 		if (TW.readyState == 4) {
		// 			document.getElementById(ReturnDiv).innerHTML = TW.responseText;
		// 		}
		// 	}
		// 	TW.open('post', "<?php echo site_url('/TranWord/');?>"+WordType);
		// 	TW.setRequestHeader("content-type","application/x-www-form-urlencoded")
		// 	TW.send(info);
		// }
	</script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>