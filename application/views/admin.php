<!DOCTYPE html>
<html>
<?php
	if(isset($this->session->userdata['akses'])){
		
	}else {
		redirect('login');
	}
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IGS - Dashboard</title>

	<?php 
    foreach($css_files as $file): ?>
	    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>

	<link href="<?php echo base_url().'lumino/css/bootstrap.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'lumino/css/font-awesome.min.css'?>" rel="stylesheet">
	<link href="<?php echo base_url().'lumino/css/datepicker3.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'lumino/css/styles.css'?>" rel="stylesheet">
    
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>IGS</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="<?php echo base_url().'index.php/Admin/user_manajemen'?>"><em class="fa fa-calendar">&nbsp;</em> User</a></li>
			<li><a href="<?php echo base_url().'index.php/Admin/berita_manajemen'?>"><em class="fa fa-bar-chart">&nbsp;</em> Berita</a></li>
			<li><a href="<?php echo base_url().'index.php/Admin/manajemen_layanan'?>"><em class="fa fa-bar-chart">&nbsp;</em> Manajemen Layanan</a></li>
			<li><a href="<?php echo base_url().'index.php/Admin/manajemen_detail_layanan'?>"><em class="fa fa-bar-chart">&nbsp;</em>Detail Layanan</a></li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<?php $nama = $this->session->userdata['ses_id']; ?>
				<h1 class="page-header"><? $nama ?></h1>
			</div>
        </div><!--/.row-->
        
		<div class="row">
			<div class="col-lg-12">
				<div style="padding:5px">
					<?php echo $output; ?>
				</div>
				<?php foreach($js_files as $file): ?>
					<script src="<?php echo $file; ?>"></script>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="content-wrapper">
        
        </div>

	</div>	<!--/.main-->
	
	<!-- <script src="http://localhost/igsci/lumino/js/jquery-1.11.1.min.js"></script> -->
	<script src="<?php echo base_url().'lumino/js/bootstrap.min.js'?>"></script>
	<script src="<?php echo base_url().'lumino/js/chart.min.js'?>"></script>
	<script src="<?php echo base_url().'lumino/js/chart-data.js'?>"></script>
	<script src="<?php echo base_url().'lumino/js/bootstrap-datepicker.js'?>"></script>
	<script src="<?php echo base_url().'lumino/js/custom.js'?>"></script>
		
</body>
</html>