<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Pelatihan</title>

    <link href="<?php echo base_url().'bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
	  <img src="<?php echo base_url().'image/logoigs.png'?>" width="150" height="50" class="d-inline-block align-top" alt=""/>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo base_url().'index.php'?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo base_url().'index.php/Welcome/showPelatihan'?>">Jenis Pelatihan</a>
      <a class="nav-item nav-link" href="<?php echo base_url().'index.php/Welcome/showSertifikasi'?>">Jenis Sertifikasi</a>
      <a class="nav-item nav-link" href="<?php echo base_url().'index.php/Regis_Pelatihan'?>">Pendaftaran</a>
    </div>
  </div>
</nav>
	
	<div class="container" style="padding-top: 30px">
	<div class="row">
    <?php foreach ($data->result() as $row):?>
    <div class="col-md-4">
	<div class="card">
		<div class="card-header">
        <?php echo $row->detail_nama_layanan; ?>
		</div>
		<div class="card-body">
			<h5 class="card-title">Deskripsi :</h5>
			<p class="card-text"><?php echo $row->deskripsi; ?></p>
            <p style="text-align:center">Biaya : <?php echo $row->harga_layanan; ?></p>
			<a href="#" class="btn btn-primary">Daftar</a>
		</div>
        <div class="card-footer text-muted" style="text-align:center">
            Jadwal : <?php echo $row->tanggal_layanan; ?>
        </div>
	</div>
     <!--end of card-->
    </div>
    <?php endforeach; ?>
  </div>
	
  <div class="container"  style="padding: 5%">
	<div class="jumbotron">
		<h1>Lokasi Kami</h1>
		<p>Jl. Nazaret Kampung Yatdas, Biak, Papua.</p>
		<h2>Hubungi Kami:</h2>
		<p>Hp : 081240209370 (Heppy)  081343204424 (Emmi)</p>
	</div>
	</div>
    
    <script src="<?php echo base_url().'lumino/js/jquery-1.11.1.min.js'?>"></script>
	<script src="<?php echo base_url().'bootstrap/js/bootstrap.min.js'?>"></script>
    
</body>
</html>