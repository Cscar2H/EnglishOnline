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

<body>
<div id="ModleByall"></div>
<div id="moveDiv" style="min-width:200px;min-height:150px;position:absolute;display:none;z-index:1;" class="panel panel-default">
  <div class="panel-heading bg-info" id="WordByTran">查询文字</div>
  <div class="panel-body">
    <div class="SelectWordReturn well" id="returnCheck" style="color: #000!important;">
    	返回结果
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
										<img alt="" class="admin-pic img-circle" src="<?php echo base_url();?>assets/img/UserIMG/user.png">
										<span color="#FFF">你好! 管理员 </span><b class="caret"></b>
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
					<a href="<?php echo site_url('Welcome');?>">
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
			<div class="paper-wrap bevel tlbr" style=" color:#000;">
				<div class="row clearfix">
					<div class="text-right">
						<span class="glyphicon glyphicon-home"></span>
						主页 <span class="glyphicon glyphicon-arrow-right"></span>关于我们
						<hr style="border:1px solid #dfd9d9;">
					</div>
					<div class="well">
						 <div>
							<img src="<?php echo base_url();?>assets/ico/sc.jpg" style="width:15%;height:15%;" alt="SOVO思创公司">
						 </div>
						 <div class="text-center">
							<h2>概况</h2>
							<hr />
							<h4>思创公司成立于2003年12月23日，是东软SOVO首批成立的虚拟公司之一</h4>
						 </div>
						 <div>
							<div class="media">
							 <div class="media-body">
								<h3 class="media-heading">行政部</h3>
								<p>有优秀的语言文字组织能力与策划能力，能根据公司发展情况，制定出合乎公司现状的规章制度，收集合理化建议，提高制度的可执行性和有效性，切实可行的提高员工工作主动性和规范性。能处理好员工与员工之间的关系，能协调好部门与部门之间的合作。使公司在一个和谐的环境下不断前进。行政部内部分为行政人员和秘书两个职位。</p>
							 </div>
							</div>
						 </div>
						 <div >
							<div class="media">
							 <div class="media-body">
								<h3 class="media-heading">美工部</h3>
								<p>对于网页设计与平面设计有深入了解，也可以对视频进行制作与剪切，能够熟练运用操作Photoshop、Dreamweaver、Flsah、Premiere、After Effects等工具，具有扎实的美工基础与良好的审美观，有良好的创造力，达到对新鲜事物的灵感开发，能够运用css + div编写网页。具有设计感，有丰富的创意，能够制作出有视觉冲击力的网页。</p>
							 </div>
							</div>
						 </div>
						 <div>
							<div class="media">
							 <div class="media-body">
								<h3 class="media-heading">研发部</h3>
								<p>主要负责公司项目所需的产品的设计与开发，产品升级及基础技术研究，认真贯彻国家的技术政策，保证新产品的技术水平，提高公司经济效益。研发部设有Android、iOS、PHP等开发技术方向，是整个公司的核心部门。</p>
							 </div>
							</div>
						 </div>
						 <div>
							<div class="media">
							 <div class="media-body">
								<h3 class="media-heading">测试部</h3>
								<p>主要负责公司所研发的产品进行测试，保证产品的质量，尽可能的发现产品存在的bug，主要用到的测试技术包括黑盒测试、白盒测试、压力测试、性能与功能的测试，还包括一系列的测试用例文档编写，同时负责组织搭建、管理和维护部门的测试环境，完善产品的性能，使产品更加完美。</p>
							 </div>
							</div>
						 </div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-footer">
						<footer class="text-center">
							<p>Copyright &copy; 2017 SOVO思创</p>
						</footer>
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

		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/main.js"></script>

</body>

</html>
