<!DOCTYPE html>
<html lang="en">
<head>
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                <meta charset="utf-8" />
                <title>Test CI Application - <?php echo $title;?></title>
 
                <meta name="description" content="overview &amp; stats" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
 
                <!-- bootstrap & fontawesome -->
                <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" />
                <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/4.2.0/css/font-awesome.min.css" />
                <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" class="theme-stylesheet" id="theme-style" />
                <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fonts.googleapis.com.css" />
                <!-- page specific plugin styles -->
</head>
 
<body class="no-skin">
	<div id="navbar" class="navbar navbar-default">
		<div class="navbar-container" id="navbar-container">
			<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
				<span class="sr-only">Toggle sidebar</span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>

				<span class="icon-bar"></span>
			</button>

			<div class="navbar-header pull-left">
				<a href="/" class="navbar-brand">
					<small>
						<i class="fa fa-leaf"></i>
						Sample CI Example
					</small>
				</a>
			</div>
 
			<div class="navbar-buttons navbar-header pull-right" role="navigation">
				<ul class="nav ace-nav">
					<li class="light-blue">
						<a data-toggle="dropdown" href="#" class="dropdown-toggle">
							<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="Admin Photo" />
							<span class="user-info">
							<small>Welcome,</small>
							Admin
							</span>

							<i class="ace-icon fa fa-caret-down"></i>
						</a>

						<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
							<li>
							<a href="#">
							<i class="ace-icon fa fa-cog"></i>
							Settings
							</a>
							</li>

							<li>
							<a href="#">
							<i class="ace-icon fa fa-user"></i>
							Profile
							</a>
							</li>

							<li class="divider"></li>

							<li>
							<a href="#">
							<i class="ace-icon fa fa-power-off"></i>
							Logout
							</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.navbar-container -->
	</div>
	<div class="main-container" id="main-container">
		<div id="sidebar" class="sidebar responsive">
			<ul class="nav nav-list">
				<li class="<?php echo $title == 'Home' ? 'active' : '' ?>">
					<a href="/">
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text"> Dashboard </span>
					</a>

					<b class="arrow"></b>
				</li>
				<li class="<?php echo $title == 'about' ? 'active' : ''?>">
					<a href="/home/about">
						<i class="menu-icon fa fa-list-alt"></i>
						<span class="menu-text"> About us </span>
					</a>

					<b class="arrow"></b>
				</li>
			</ul><!-- /.nav-list -->
	 
			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
				<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
			</div>
		</div>
 
		<div class="main-content">
			<div class="main-content-inner">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="/">Home</a>
						</li>
						<?php if($title != 'Home') :?>
						<li class="active"><?php echo $title;?></li>
						<?php endif;?>
					</ul><!-- /.breadcrumb -->

				<div class="nav-search" id="nav-search">
					<form class="form-search">
						<span class="input-icon">
							<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input1" autocomplete="off" />
							<i class="ace-icon fa fa-search nav-search-icon"></i>
						</span>
					</form>
				</div><!-- /.nav-search -->
				</div>

			<div class="page-content">
				<div class="row">
					<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->
					<?php echo $contents;?>
					<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
				</div><!-- /.page-content -->
			</div>
		</div><!-- /.main-content -->
 
		<div class="footer">
			<div class="footer-inner">
				<div class="footer-content">
					<span class="bigger-120">
									Copyright © phpflow.com. All rights reserved.
					</span>
				</div>
			</div>
		</div>
 
		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
			<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div><!-- /.main-container -->
 
	<!-- basic scripts -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.2.1.1.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/theme.min.js"></script>
</body>
</html>
