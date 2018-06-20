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
		<div class="SelectWordReturn well">
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
					<h1 class="nav navbar-nav">ENGLISHONLIEN</h1>
					<ul class="nav navbar-right">
						<li class="dropdown">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<img alt="头像" class="admin-pic img-circle" src="<?php echo base_url();?>assets/img/UserIMG/user.png">
								<span color="#FFF">登录</span>
							</a>
						</li>
						<li>
							<a href="#"  data-toggle="dropdown" class="dropdown-toggle">
								<button class="btn btn-info glyphicon glyphicon-ok-circle" onclick="select(document, tanchu, 1)" title="开启屏幕选词翻译">开</button>
								<button class="btn btn-danger glyphicon glyphicon-ban-circle" onclick="select(document, tanchu, 0)" title="关闭屏幕选词翻译">关</button>
							</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</div>
		<!-- /END OF TOP NAVBAR -->
<div class="container">
	<div class="row clearfix">
		<div class="col-md-3 column">
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
		</div>
		<!-- content from -->
		<div class="col-md-8 column ">
			<div class="paper-wrap bevel tlbr" style="color:#000;">
				<div class="row clearfix">
					<div class="text-right">
						<span class="glyphicon glyphicon-asterisk"></span>登录
						<hr style="border:1px solid #dfd9d9;">
					</div>
					<div class="body-nest">
						<div class="well">
							<form role="form" action="<?php echo site_url('/admin/auth/Login/');?>" method="post">
							  <div class="form-group">
							    <label>用户名：</label>
							    <input type="text" class="form-control" name="LoginName" placeholder="用户名" style="color:#000!important; width:45%;">
							  </div>
							  <div class="form-group">
							    <label>密码：</label>
							    <input type="password" class="form-control" name="LoginPassword" placeholder="密码" style="color:#000!important; width:45%;">
							  </div>
							  <div class="form-group"><h6>没有帐号？<a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">点击我注册吧。^_^</a></h6></div>
							  <div class="form-group">
							  	<button type="submit" class="btn btn-info">登录</button>
							  </div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- end from content-->
	</div>
</div>

<!-- sign modal -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
			<div class="panel panel-default">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title">用户注册</h4>
	      </div>
			  <div class="panel-body well" style="color:#000!important;">
					<form role="form" action="<?php echo site_url('/admin/auth/Sign/');?>" method="post">
						<div class="form-group">
					    <label>*用户名：</label>
					    <input type="text" class="form-control" name="SignName" placeholder="Username" onblur="checkWord(this.value,'checkUsername','<?php echo site_url('/admin/auth/CKUser/');?>');">
					    <span class="alert-danger" id="checkUsername"></span>
					  </div>
					  <div class="form-group">
					    <label>*登录密码：</label>
					    <input type="password" class="form-control" name="SignPassword" id="pas1" placeholder="Password">
					  </div>
					  <div class="form-group">
					    <label >*确认密码：</label>
					    <input type="password" class="form-control" name="SignPassword2" id="pas2" placeholder="CheckPassword" onblur="CKPas();">
					    <span class="alert-danger" id="checkPas"></span>
					  </div>
					  <div class="form-group">
					    <label >*注册邮箱：</label>
					    <input type="email" class="form-control" name="SignEmail" placeholder="Enter email" onblur="checkWord(this.value,'checkMail','<?php echo site_url('/admin/auth/CKMail/');?>');">
						<span class="alert-danger" id="checkMail"></span>
					  </div>
					  <div class="checkbox">
					  </div>
					  <button type="submit" class="btn btn-info">提交</button>
					</form>
			  </div>
			</div>
    </div>
  </div>
</div>
<!-- end sign modal -->

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
