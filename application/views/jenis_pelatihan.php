<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Pelatihan</title>

    <link href="http://localhost/igsci/lumino/css/bootstrap.min.css" rel="stylesheet">
	<link href="http://localhost/igsci/lumino/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://localhost/igsci/lumino/css/datepicker3.css" rel="stylesheet">
    <link href="http://localhost/igsci/lumino/css/styles.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="/igsci/index.php"><span>IGS</span> SKILL DEVELOPMENT</a>
				<ul class="nav navbar-nav">
					<li class="active"><a href="/igsci/index.php">Home</a></li>
					<li><a href="index.php/Welcome/showPelatihan">Jenis Pelatihan</a></li>
					<li><a href="index.php/Welcome/showSertifikasi">Jenis Sertifikasi</a></li>
					<li><a href="index.php/Regis_pelatihan">Pendaftaran</a></li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	

	<div class="row">
			<div class="col-lg-12">
				<h2>Pelatihan</h2>
			</div>
			<?php foreach ($data->result() as $row):?>
			<div class="col-md-4">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo $row->detail_nama_layanan; ?></div>
					<div class="panel-body">
                        <p><?php echo $row->deskripsi; ?></p>
                        <p>Harga : Rp. <?php echo $row->harga_layanan;?></p>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	
		
		<div class="row">
			<div class="col-lg-12">				
            
			</div><!-- /.col-->
			<div class="col-sm-12">
				
			</div>
		</div><!-- /.row -->
    </div><!--/.main-->
    
    <script src="http://localhost/igsci/lumino/js/jquery-1.11.1.min.js"></script>
	<script src="http://localhost/igsci/lumino/js/bootstrap.min.js"></script>
	<script src="http://localhost/igsci/lumino/js/bootstrap-datepicker.js"></script>
	<script src="http://localhost/igsci/lumino/js/custom.js"></script>
    
</body>
</html>



<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="/igsci/index.php"><span>IGS</span> SKILL DEVELOPMENT</a>
				<ul class="nav navbar-nav">
					<li class="active"><a href="/igsci/index.php">Home</a></li>
					<li><a href="index.php/Welcome/showPelatihan">Jenis Pelatihan</a></li>
					<li><a href="index.php/Welcome/showSertifikasi">Jenis Sertifikasi</a></li>
					<li><a href="index.php/Regis_pelatihan">Pendaftaran</a></li>
				</ul>
			</div>
		</div>
	</nav>

	