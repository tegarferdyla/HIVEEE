<?php foreach ($perusahaan as $k) {
		} ?>
<section>
	<div class="container">
		<div class="col-md-3 col-sm-3 text-center">
			<div class="emp-pic">
				<img src="<?php echo base_url('assets/img/'.$k->logo) ?>" class= "img-responsive img-circle width-220" alt="">
			</div>
		</div>
		<?php foreach ($perusahaan as $k) {
		?>
		<div class="col-md-6 col-sm-6">
			<div class="emp-des">
				<br>
				<h3><?php echo $k->nama_lowongan; ?></h3>
				<p>2 Juni 2018 - 18 Juni 2018</p> 
				<p class="text-muted"><span class="ti-location-pin"></span> <?php echo $k->alamat_perusahaan; ?></p>
				<p class="text-muted" style="color:green"><span class="ti-money"></span> <?php echo $k->gaji; ?></p>
			</div>
		</div>
		
	</div>
</section>
<div class="container">
	<div class="col-md-12 dol-md-12">
		<div class="tab style-1" role="tabpanel">
			<ul class="nav nav-tabs" role="tablist">
				<li role="persentation" class="active"><a href="#pelamar" aria-controls="pelamar" role="tab" data-toggle="tab" >Daftar Pelamar <span class="cl-primary">(<?php echo $jml; ?>) </span></a></li>
				<li role="persentation"><a href="#terima" aria-controls="terima" role="tab" data-toggle ="tab">Diterima <span class="cl-success">(<?php echo $jmlterima; ?>)</span></a> </li>
			</ul>
			<div class="tab-content tabs">
				<div role="tabpanel" class="tab-pane fade in active" id="pelamar">
					<h6 class="text-right"><a href="<?=site_url("perusahaan/cetakdaftarpelamar/".$k->id_lowongan)?>" alt="Print Laporan" target = _blank><i class= "fa fa-print"></i> Print Laporan </a></h6>
					<?php } ?>
					<div class="table-responsive"> 
					<table class="table table-lg table-hover">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Telepon</th>
								<th>Email</th>
								<th>Tanggal Lamar</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($lowonganlamar as $y) {
							?>
							<tr>
								<td>
									<a href="job-detail.html">
										<img src="<?php echo base_url('assets/img/'.$y->foto) ?> " class="avatar avatar-lg" alt="Avatar"><?php echo $y->nama; ?>
										<span class="mng-jb"><?php echo $y->p_terakhir; ?></span>
									</a>
								</td>
								<td><?php echo $y->telp; ?></td>
								<td><?php echo $y->email; ?></td>                
								<td><i class="ti-credit-card"></i> <?php echo $y->tgl_daftar; ?></td>
								<td><?php echo $y->status; ?></td>
								<td>
									<a href="<?php echo site_url('perusahaan/checkdetail/'.$y->id_kandidat) ?>" class="cl-info mrg-5" title ="Check Detail"><i class="fa fa-edit"></i></a>
									<a href="<?php echo site_url('perusahaan/ubahlamaran/'.$y->id_kandidat.'/'.$k->id_lowongan) ?>"  class="cl-success mrg-5"  title ="Terima" ><i class="fa fa-check"></i></a>
									<a href="<?php echo site_url('perusahaan/tolaklamaran/'.$y->id_kandidat.'/'.$k->id_lowongan) ?>" class="cl-danger mrg-5"  title ="Delete"><i class="fa fa-close"></i></a>
								</td>  
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="terima">
				<h6 class="text-right"><a href="<?=site_url("perusahaan/cetakdaftarterima/".$k->id_lowongan)?>" alt="Print Laporan" target = _blank><i class= "fa fa-print"></i> Print Laporan </a></h6>
				<div class="table-responsive"> 
					<table class="table table-lg table-hover">
						<thead>
							<tr>
								<th>Nama</th>
								<th>Telepon</th>
								<th>Email</th>
								<th>Tanggal Lamar</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<?php foreach ($lowonganterima as $x) {
							?>
							<tr>
								<td>
									<a href="job-detail.html">
										<img src="<?php echo base_url('assets/img/'.$x->foto) ?> " class="avatar avatar-lg" alt="Avatar"><?php echo $x->nama; ?>
										<span class="mng-jb"><?php echo $x->p_terakhir; ?></span>
									</a>
								</td>
								<td><?php echo $x->telp; ?></td>
								<td><?php echo $x->email; ?></td>                
								<td><i class="ti-credit-card"></i> <?php echo $x->tgl_daftar; ?></td>
								<td><?php echo $x->status; ?></td>
								<td>
									<a href="<?php echo site_url('perusahaan/checkdetail/'.$x->id_kandidat) ?>" class="cl-info mrg-5" title ="Check Detail"><i class="fa fa-edit"></i></a>
									<!-- <a href="<?php echo site_url('perusahaan/ubahlamaran/'.$x->id_kandidat.'/'.$k->id_lowongan) ?>"  class="cl-success mrg-5"  title ="Terima" ><i class="fa fa-check"></i></a> -->
									<a href="<?php echo site_url('perusahaan/tolaklamaran/'.$x->id_kandidat.'/'.$k->id_lowongan) ?>" class="cl-danger mrg-5"  title ="Delete"><i class="fa fa-close"></i></a>
								</td>  
							</tr>
							<!-- <?php } ?> -->
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
		<!-- flexbox -->
		<div class="flexbox padd-10">
			<ul class="pagination">
				<li class="page-item">
					<a class="page-link" href="manage-resume.html#" aria-label="Previous">
						<span aria-hidden="true">«</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<li class="page-item active"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="manage-resume.html#" aria-label="Next">
						<span aria-hidden="true">»</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- /.flexbox -->
	</div>

</div>
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="text-center"><img src="<?php echo base_url('assets/img/hivee.png') ?>" alt="" class="gambar img-responsive"></div>
				<hr>
				<h4> Apakah anda yakin ingin menolak lamaran ini ?</h4>
				<div class="row">
							<div class="col-md-6 text-right mrg-top-40">
									<a href="" class="btn btn-success btn-block" title ="Yes"><i class="fa fa-check"></i></a>
								</div>
							<div class="col-md-6 text-center mrg-top-40">
									<a href="" class="btn btn-danger btn-block" title ="No"><i class="fa fa-close"></i></a>
								</div>
						</div>
			</div>
		</div>
	</div>
</div>
