<!-- ======================= Start Page Title ===================== -->
		<div class="page-title">
			<div class="container">
				<div class="page-caption">
					<div class="col-md-6">
						<h2>Create Job</h2>
						<p><a href="#" title="Home">Home</a> <i class="ti-arrow-right"></i> Create Job</p>
						<hr>
					</div>

				</div>
			</div>
		</div>
		<!-- ======================= End Page Title ===================== -->
<section class="">
	<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="detail-wrapper" style = "border-color: #ff7c39">
			<div class="detail-wrapper-header" style = "border-color: #ff7c39">
				<h4 class="warnaorange"><i class="ti-briefcase padd-r-10"></i> Informasi Pekerjaan</h4>
			</div>
			<div class="detail-wrapper-body">
				<form action="<?php echo base_url('Perusahaan/TambahLowongan')?>" method="POST" class="log-form warnaorange" id="defaultForm">
					
					<div class="row">
						<div class="col-md-12">
							<label for="" class="">Job Title</label>
							<input type="text" name="judul" class="form-control" required> 
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<label for="">Category Job</label><br>
							<select name="kategori" id="" class="wide form-control">
								<option value="" >Select Category</option>
								<option value="Akutansi & Keuangan">Akutansi & Keuangan</option>
								<option value="Administrasi">Administrasi</option>
								<option value="Otomotif">Otomotif</option>
								<option value="Retail Staff">Retail Staff</option>
								<option value="Design">Design</option>
								<option value="Event Staff">Event Staff</option>
								<option value="Food & Beverage">Food & Beverage</option>
								<option value="Developer">Developer</option>
							</select>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="">Position Level </label>
							<input type="text" name="posisi" class="form-control" required>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="">Salary </label>
							<input type="number" name="gaji" class="form-control number" required>
						</div>
						<div class="col-md-6">
							<label for="">/ Hours / Day / Month</label>
							<select name="average" id="" class="wide form-control">
								<option value="" >Select Average</option>
								<option value="Hours" >Hours</option>
								<option value="Day" >Day</option>
								<option value="Month">Month</option>
							</select>	
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="">Location</label>
							<input type="text" name="lokasi" value="" class="form-control " required>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="">Start Date</label>
							 <input type="text" name="startdate" id="dob" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control " readonly="">
						</div>
						<div class="col-md-6">
							<label for="">End Date</label>
							 <input type="text" id="dob1" name="enddate" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control " readonly="">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="">Description</label>
							<textarea name="deskripsi" id="" class="form-control texteditor"  cols="30" rows="10" style="resize:none;"></textarea>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<label for="">Reqruitments</label>
							<textarea name="syarat" id="" class="form-control" cols="30" rows="10" style="resize:none;"></textarea>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							 <button type="submit" class="btn btn-hiring theme-btn btn-m mrg-5" >Bagikan Lowongan</button>

						</div>
					</div>

				</form>
			</div>
		</div>
		</div>
		
	</div>	
	</div>
</section>