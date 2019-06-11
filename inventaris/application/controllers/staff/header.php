<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Sewa Inventaris</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">  
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/datatable/datatables.css' ?>">  
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>  
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>  
	<script type="text/javascript" src="<?php echo base_url().'assets/datatable/jquery.dataTables.js'; ?>"></script>  
	<script type="text/javascript" src="<?php echo base_url().'assets/datatable/datatables.js'; ?>"></script> 
</head> 
<body>  
	<nav class="navbar navbar-default">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbarcollapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url().'staff'; ?>">Sewa Inventaris</a>
		</div>
		
		<div class="collapse navbar-collapse" id="bs-examplenavbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="<?php echo base_url().'staff'; ?>"><span class="glyphicon glyphiconhome"></span> Dashboard <span class="sronly">(current)</span></a></li>
				<li><a href="<?php echo base_url().'staff/barang'; ?>"><span class="glyphicon glyphiconfolder-open"></span> Data Barang</a></li>
				<li><a href="<?php echo base_url().'staff/member'; ?>"><span class="glyphicon glyphiconuser"></span> Data Member</a></li>
				<li><a href="<?php echo base_url().'staff/orderbarang'; ?>"><span class="glyphicon glyphiconsort"></span> Data Order</a></li>
				<li><a href="<?php echo base_url().'staff/pengembalian'; ?>"><span class="glyphicon glyphiconsort"></span> Data Pengembalian</a></li>
				<li><a href="<?php echo base_url().'staff/laporan'; ?>"><span class="glyphicon glyphiconlist-alt"></span> Laporan</a></li>
			
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="<?php echo base_url().'staff/logout'; ?>"><span class="glyphicon glyphicon-logout"></span> Logout</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" datatoggle="dropdown" role="button" aria-haspopup="true" ariaexpanded="false"><?php echo "Halo, <b>".$this->session>userdata('nama'); ?></b> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li>
							<a href="<?php echo base_url().'staff/ganti_password' ?>"><i class="glyphicon glyphiconlock"></i> Ganti Password</a>
						</li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->  
	</div><!-- /.container-fluid --> 
</nav> 

<div class="container">