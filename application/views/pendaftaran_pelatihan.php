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
				<a class="navbar-brand" href="#"><span>IGS</span> SKILL DEVELOPMENT</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<ul class="nav menu">
			<li><a href="/igsci/index.php"><em class="fa fa-dashboard">&nbsp;</em> Halaman Utama</a></li>
			<li><a href="index.php/Welcome/showPelatihan"><em class="fa fa-calendar">&nbsp;</em> Jenis-Jenis Pelatihan</a></li>
			<li><a href="index.php/Welcome/Pembayaran"><em class="fa fa-bar-chart">&nbsp;</em> Cara Pembayaran</a></li>
			<li><a href="#"><em class="fa fa-toggle-off">&nbsp;</em> Lokasi Kami</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Forms</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Pendaftaran Pelatihan</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">				
				<div class="panel panel-default">
					<div class="panel-heading">Forms</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="http://localhost/igsci/index.php/Regis_Pelatihan/proses_add">
								<div class="form-group">
									<label>Nama Lengkap</label>
									<input class="form-control" type="text" name="nama" required="">
                                </div>
                                <div class="form-group">
									<label>Tanggal Lahir</label>
									<input class="form-control" type="text" name="tl" required="">
									<p class="help-block">Format : yyyy/mm/dd Contoh : 1998/12/01</p>
								</div>
                                <div class="form-group">
									<label>Alamat</label>
									<input class="form-control" type="text" name="alamat" required="">
                                </div>
                                <div class="form-group">
									<label>Email</label>
									<input class="form-control" type="text" name="email" required="">
                                </div>
                                <div class="form-group">
									<label>No Telp</label>
									<input class="form-control" type="text" name="no_telp" required="">
                                </div>
                                <div class="form-group">
										<label>File Identitas</label>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">KTP
											</label>
										</div>
										<div class="checkbox">
											<label>
												<input type="checkbox" value="">SIM
											</label>
                                        </div>
                                        <div class="checkbox">
											<label>
												<input type="checkbox" value="">Kartu Pelajar/Mahasiswa
											</label>
										</div>
								</div>
								<div class="form-group">
									<label>Upload file identitas</label>
									<input type="file" name="file_upload">
								</div>
								<div class="form-group">
									<label>Keterbatasan</label>
                                    <textarea class="form-control" rows="3" type="text" name="keterbatasan"></textarea>
                                    <p class="help-block">Jelaskan keterbatasan anda, misalkan jika anda memiliki kekurangan dalam pengelihatan atau sebagainya.</p>
								</div>
								</div>
								<div class="col-md-6">
                                	<div class="form-group">
										<label>Jenis Kelamin</label>
										<select class="form-control" type="text" name="gender" required="">
											<option value="Laki-Laki">Laki-Laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
										<label>Jenis layanan</label>
										<select class="form-control" type="text" id="jenis_layanan" name="jenis_layanan" required="">
											<option value="0">--Pilih--</option>
											<?php foreach ($data->result() as $row):?>
												<option value="<?php echo $row->id_layanan;?>"><?php echo $row->nama_layanan;?></option>
											<?php endforeach;?>
										</select>
										<label>Pilihan</label>
										<select class="layanan_pilihan form-control" type="text" name="layanan_pilihan" id="layanan_pilihan" required="">
											<option value="0">--Pilih--</option>
										</select>
									</div>
                                    
									<div class="form-group">
										<label>Jadwal</label>
										<input class="form-control" type="text" name="jadwal" placeholder="Jadwal" readonly>
									</div>
									<div class="form-group">
										<label>Jam</label>
										<input class="form-control" type="text" name="jam" placeholder="Jam" readonly>
									</div>
									<div class="form-group">
										<label>Tempat</label>
										<input class="form-control" type="text" name="tempat" placeholder="tempat" readonly>
									</div>
									<div class="form-group">
										<label>Harga</label>
										<input class="form-control" type="text" name="harga" placeholder="Harga" readonly>
                                	</div>
									<button type="submit" class="btn btn-primary">Submit Button</button>
									<button type="reset" class="btn btn-default">Reset Button</button>
								</div>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<div class="col-sm-12">
				
			</div>
		</div><!-- /.row -->
    </div><!--/.main-->
    
	<!-- <script src="http://localhost/igsci/lumino/js/jquery-1.11.1.min.js"></script> -->
	<script src="<?php echo base_url().'bootstrap/js/jquery-3.3.1.min.js'?>"></script>
	<script src="http://localhost/igsci/lumino/js/bootstrap.min.js"></script>
	<script src="http://localhost/igsci/lumino/js/bootstrap-datepicker.js"></script>
	<script src="http://localhost/igsci/lumino/js/custom.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#jenis_layanan').change(function(){
				var id=$(this).val();
				$.ajax({
					url : "<?php echo base_url();?>index.php/Regis_Pelatihan/getDetailLayanan",
					method : "POST",
					data : {id: id},
					dataType : 'json',
					success : function(data){
						console.log(data);
						var html = '';
						var i;
						for (i=0; i<data.length; i++){
							html += '<option value='+data[i].id_detail+'>'+data[i].detail_nama_layanan+'</option>';
						}
						$('.layanan_pilihan').html(html);
					}
				});
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#layanan_pilihan').change(function(){
				var id = $(this).val();
				$.ajax({
					type : "POST",
					url  : "<?php echo base_url();?>index.php/Regis_Pelatihan/getRincian",
					data : {id: id},
					cache : false,
					success : function(data){
						var dataa = $.parseJSON(data);
						console.log(data);
						$.each(dataa, function(id_detail, tanggal_layanan, harga_layanan, jam_layanan, tempat_layanan, fk_id_layanan, detail_nama_layanan){
							$('[name="jadwal"]').val(dataa.tanggal_layanan);
							$('[name="jam"]').val(dataa.jam_layanan);
							$('[name="tempat"]').val(dataa.tempat_layanan);
							$('[name="harga"]').val(dataa.harga_layanan);
						});
					}
				});
				return false;
			});
		});
	</script>
    
</body>
</html>


<!-- <div class="panel panel-default">
                                        <div class="panel-body tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a href="#tab1" data-toggle="tab">Pelatihan</a></li>
                                                <li><a href="#tab2" data-toggle="tab">Sertifikasi</a></li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade in active" id="tab1">
                                                    <h4>Daftar Pelatihan</h4>
                                                    <div class="form-group">
                                                            <div class="checkbox" type="text">
                                                                <label>
                                                                    <input type="checkbox" value="Microsoft Office" name="pelatihan[]">Microsoft Office (Word, Excel, dan Power Point)
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" value="MYOB + DAC Easy" name="pelatihan[]">MYOB + DAC Easy Accounting /SKA GL
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" value="Microsoft VB" name="pelatihan[]">Microsoft Visual Basic
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" value="Java" name="pelatihan[]">Java
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" value="Desain" name="pelatihan[]">Adobe Photoshop & CorelDRAW
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" value="Web Development" name="pelatihan[]">Web Development
                                                                </label>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="tab2">
                                                    <h4>Daftar Sertifikasi</h4>
                                                    <div class="form-group">
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" value="Practical Office">Practical Office
                                                                </label>
                                                            </div>
                                                            <div class="checkbox">
                                                                <label>
                                                                    <input type="checkbox" value="Practcal Programming">Practical Programmer
                                                                </label>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->