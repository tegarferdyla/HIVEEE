      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Data Perusahaan
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" >Master Company</a></li>
                <li class="breadcrumb-item" aria-current="page">Detail Company</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Detail Company</h4>                    
                    </div>
                  </div>
                  <p class="card-description">
                    Berikut adalah detail dari <b><?php echo ucwords($detail_perusahaan['nm_perusahaan']); ?></b> .
                  </p>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <?php if (!empty($detail_perusahaan['logo'])) : ?>
                      <img src="<?php echo base_url('assets/img/'.$detail_perusahaan['logo']); ?>" width ="150px" alt="">
                      <?php else : ?>
                      <img src="<?php echo base_url('assets/img/company.png')?>" width ="150px" alt="profile">
                    <?php endif ?>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <?php if($detail_perusahaan['Status'] == 'NonAktif') : ?>
                      <a class="btn btn-danger" href="#" title="Cek Details"> <?php echo strtoupper($detail_perusahaan['Status']); ?></a>
                      <?php else : ?>
                        <a class="btn btn-success" href="#" title="Cek Details"> <?php echo strtoupper($detail_perusahaan['Status']); ?></a>
                      <?php endif ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-3"> <h4>Nama Perusahaan:</h4></div>
                    <div class="col-md-9">  <h4><?php echo ucwords($detail_perusahaan['nm_perusahaan']); ?></h4></div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <h4>Username :</h4></div>
                    <div class="col-md-9">  <h4><?php echo ucwords($detail_perusahaan['username']); ?></h4></div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <h4>Email :</h4></div>
                    <div class="col-md-9">  <h4><?php echo ucwords($detail_perusahaan['email']); ?></h4></div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <h4>Telepon :</h4></div>
                    <div class="col-md-9"><h4><?php echo ucwords($detail_perusahaan['telp']); ?></h4></div>
                  </div>
                  <div class="row"> 
                    <div class="col-md-3"> <h4>Alamat :</h4></div>
                    <div class="col-md-9"><h4><?php echo ucwords($detail_perusahaan['alamat_perusahaan']); ?></h4></div>
                  </div>
                  <div class="row"> 
                    <div class="col-md-3"> <h4>Website :</h4></div>
                    <div class="col-md-9"><h4><?php echo ucwords($detail_perusahaan['website']); ?></h4></div>
                  </div>
                  <div class="row"> 
                    <div class="col-md-3"> <h4>Deskripsi Perusahaan :</h4></div>
                    <div class="col-md-9"><h4><?php echo ucwords($detail_perusahaan['deskripsi_perusahaan']); ?></h4></div>
                  </div>
              </div>
            </div>
         </div>   

  