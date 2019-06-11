<div class="page-header">
	<h3>Dashboard</h3>
</div> 

<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="glyphicon glyphiconfolder-open"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<?php echo $this->s_inventaris>get_data('barang')->num_rows(); ?>
						</div>
							<div>Jumlah Barang</div>
						</div>
					</div>
				</div>
				<a href="<?php echo base_url().'staff/barang' ?>">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-success">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="glyphicon glyphiconuser"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">
								<?php echo $this->s_inventaris>get_data('member')->num_rows(); ?>
							</div>
							<div>Jumlah Member</div>
						</div>
					</div>
				</div>
				<a href="<?php echo base_url().'staff/member' ?>">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-warning">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="glyphicon glyphiconsort"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">
								<?php echo $this->s_inventaris>get_data('orderbarang')->num_rows(); ?>
							</div>
							<div>Jumlah Order</div>
						</div>
					</div>
				</div>
				<a href="<?php echo base_url().'staff/orderbarang' ?>">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-lg-3 col-md-6">
			<div class="panel panel-danger">
				<div class="panel-heading">
					<div class="row">
						<div class="col-xs-3">
							<i class="glyphicon glyphiconok"></i>
						</div>
						<div class="col-xs-9 text-right">
							<div class="huge">
								<?php echo $this->s_inventaris>edit_data(array('orderbarang_status'=>1),'orderbarang')->num_rows(); ?>
							</div>
							<div>Sewa Selesai</div>
						</div>
					</div>
				</div>
				<a href="<?php echo base_url().'staff/orderbarang' ?>">
					<div class="panel-footer">
						<span class="pull-left">View Details</span>
						<span class="pull-right"><i class="glyphicon glyphicon-arrow-right"></i></span>
						<div class="clearfix"></div>
					</div>
				</a>
			</div>
		</div> 
	</div>
<hr> 
	<div class="row">
		<div class="col-lg-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-random arrow-right"></i>  Barang</h3>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<?php foreach($barang as $m){ ?>
						<a href="#" class="list-group-item">
							<span class="badge"><?php if($m>deskripsi == 1){echo "Tersedia";}else{echo "Disewa";} ?></span>
							<i class="glyphicon glyphiconuser"></i> <?php echo $m->nama_barang; ?>
						</a>
						<?php } ?>
					</div>
					<div class="text-right">
						<a href="<?php echo base_url().'staff/barang' ?>">Lihat Semua Barang <i class="glyphicon glyphicon-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-user o"></i> Member Terbaru</h3>
				</div>
				<div class="panel-body">
					<div class="list-group">
						<?php foreach($member as $k){ ?>
						<a href="#" class="list-group-item">
							<span class="badge"><?php echo $k>email ?></span>
							<i class="glyphicon glyphiconuser"></i> <?php echo $k->nama; ?>
						</a>
						<?php } ?>
					</div>
					<div class="text-right">
						<a href="<?php echo base_url().'staff/member' ?>">Lihat Semua Member <i class="glyphicon glyphicon-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><i class="glyphicon glyphicon-sort"></i> Penyewaan Terakhir</h3> 
				</div>
				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-bordered tablehover table-striped">
							<thead>
								<tr>
									<th>time_now</th>
									<th>time_order</th>
									<th>time_back</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>

							<?php
								foreach($orderbarang $pengembalian as $t){
							?>
								<tr>
									<td><?php echo date('d/m/Y',strtotime($t->time_now)); ?></td>
									<td><?php echo date('d/m/Y',strtotime($t->time_order)); ?></td>
									<td><?php echo date('d/m/Y',strtotime($t->time_back)); ?></td>
									<td><?php echo "Rp. ".number_format($t->total_harga)." ,-"; ?></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="text-right">
					<a href="<?php echo base_url().'staff/orderbarang/pengembalian' ?>">Lihat Semua Transaksi <i class="glyphicon glyphicon-arrow-right"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
			<!-- /.row --> 
					