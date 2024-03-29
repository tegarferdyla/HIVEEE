<?php foreach ($perusahaan as $u) {
	# code...
} ?>
<section>
	<div class="container">
		<div class="col-md-3 col-sm-3">
			<div class="emp-pic">
				<img src="<?php echo base_url('assets/img/'.$u->logo) ?>" class= "img-responsive img-circle width-220" alt="">
			</div>
		</div>	
		<div class="col-md-5 col-sm-5">
			<div class="emp-des">
				<h3><?php echo $this->session->userdata('nama'); ?></h3>
				<p><i class="ti-location-pin padd-r-5"></i> <?php echo $u->alamat_perusahaan;?></p> 
				<p><i class="ti-email padd-r-5"></i><?php echo $u->email;?></p>
			</div>
			<div class="emp-bt">
				<a href="<?php echo site_url('perusahaan/create') ?>" class="btn theme-btn"><i class="ti-plus"></i> Create Jobs</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="emp-detail">
				<ul>
					<li><span class="cl-primary"><?php echo $jmlak; ?></span>Lowongan Aktif</li>
					<li><span class="cl-danger"><?php echo $jmlnon; ?></span>Lowongan Non-Aktif</li>
				</ul>
			</div>
		</div>
	</div>
	</div>	
</section>
<div class="container">
	<?php if ($this->session->flashdata('updateberhasil')):?>
	<div class="row">
	<div class="col-md-12">
		<div class="alert alert-info alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong>Well done!</strong> Lowongan anda berhasil di update , harap cek manage resume secara berkala.
		</div>
	</div>
	</div>
	<?php elseif ($this->session->flashdata('lowongannonaktif')) : ?>
		<div class="row">
	<div class="col-md-12">
		<div class="alert alert-danger alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong>Well done!</strong> Lowongan anda berhasil di nonaktifkan.
		</div>
	</div>
	</div>
	<?php endif ?>
	<div class="col-md-12 dol-md-12">
		<div class="tab style-1" role="tabpanel">
			<ul class="nav nav-tabs" role="tablist">
				<li role="persentation" class="active"><a href="#aktif" aria-controls="aktif" role="tab" data-toggle="tab" >Lowongan Aktif <span class="cl-primary">(<?php echo $jmlak; ?>)</span></a></li>
				<li role="persentation"><a href="#nonaktif" aria-controls="nonaktif" role="tab" data-toggle ="tab">Lowongan Non-Aktif <span class="cl-danger">(<?php echo $jmlnon; ?>)</span></a> </li>
			</ul>
			<div class="tab-content tabs">
				<!-- Tab Lamaran Aktif -->
				<div role="tabpanel" class="tab-pane fade in active" id="aktif">
					<?php foreach ($la as $l ) {?>	
					<div class="col-md-4 col-sm-8">
								<div class="grid-job-widget">				
									<div class="u-content">
									
										<div class="avatar box-80">
											<a href="#">
												<img class="img-responsive" src="<?php echo base_url('assets/img/'.$l->logo) ?>" alt="">
											</a>
										</div>
										<h5><a href="#"><?php echo $l->nama_lowongan; ?></a></h5>
										<p class=""><?php echo $l->tgl_post." - ".$l->bataspendaftaran;?></p>
										<p class="text-muted"><span class="ti-location-pin"></span> 
											<?php echo $l->lokasi; ?></p>
										<p class="text-muted" style="color:green"><span class="ti-money"></span><?php echo $l->gaji; ?> / <?php echo $l->average; ?></p>
									</div>
									
									<div class="job-type-grid">
										<a href="<?php echo base_url("perusahaan/manageresume/$l->id_lowongan") ?>" class="btn theme-btn">Manage Resume<span class="ti-angle-right"></span></a><br>
									</div>
									<hr>
									<div class="row">
									<div class="col-md-6">
									<a href="<?php echo base_url("perusahaan/editlowongan/$l->id_lowongan") ?>" class="cl-success mrg-5"><i class="fa fa-edit"></i> Edit Jobs</span></a>
									</div>
									<div class="col-md-6">
									<a href="<?=site_url("perusahaan/nonaktifkanlowongan/$l->id_lowongan")?>" class="cl-danger mrg-5"><i class="fa fa-trash "></i> Non-Aktif Jobs</span></a>
									</div>
									</div>
								</div>
								
							</div>
							<?php } ?>	
				</div>
				<!-- Tab Lamaran Non-Aktif -->
				<div role="tabpanel" class="tab-pane fade" id="nonaktif">
					<div role="tabpanel" class="tab-pane fade in active" id="aktif">
						<?php foreach ($ln as $x ) {?>	
						<div class="col-md-4 col-sm-8">
						
								<div class="grid-job-widget">	
															
									<div class="u-content">
										<div class="avatar box-80">
											<a href="#">
												<img class="img-responsive" src="<?php echo base_url('assets/img/'.$l->logo) ?>" alt="">
											</a>
										</div>
										<h5><a href="#"><?php echo $x->nama_lowongan; ?></a></h5>
										<p class=""><?php echo $x->tgl_post." - ".$x->bataspendaftaran;?></p>
										<p class="text-muted"><span class="ti-location-pin"></span> 
											<?php echo $x->lokasi; ?></p>
										<p class="text-muted" style="color:green"><span class="ti-money"></span><?php echo $x->gaji; ?> / <?php echo $x->average; ?> </p>
									</div>
									<!-- <div class="job-type-grid">
										<a href="<?php echo base_url("perusahaan/manageresume/$x->id_lowongan") ?>" class="btn theme-btn">Manage Resume<span class="ti-angle-right"></span></a>
									</div> -->	

								</div>
								
							</div>
							<?php } ?>	
				</div>

						


					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<br>