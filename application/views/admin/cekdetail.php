      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Data Kandidat
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" >Master Job Seeker</a></li>
                <li class="breadcrumb-item" aria-current="page">Detail Kandidat</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Detail Kandidat</h4>                    
                    </div>
                  </div>
                  <p class="card-description">
                    Berikut adalah detail dari <b><?php echo ucwords($detail_kandidat['nama']); ?></b> .
                  </p>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <?php if (!empty($detail_kandidat['foto'])) : ?>
                      <img src="<?php echo base_url('assets/img/'.$detail_kandidat['foto']); ?>" width ="150px" alt="">
                      <?php else : ?>
                      <img src="<?php echo base_url('assets/img/default.png')?>" width ="150px" alt="profile">
                    <?php endif ?>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <?php if($detail_kandidat['Status'] == 'NonAktif') : ?>
                      <a class="btn btn-danger" href="#" title="Cek Details"> <?php echo strtoupper($detail_kandidat['Status']); ?></a>
                      <?php else : ?>
                        <a class="btn btn-success" href="#" title="Cek Details"> <?php echo strtoupper($detail_kandidat['Status']); ?></a>
                      <?php endif ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-3"> <h4>Nama :</h4></div>
                    <div class="col-md-9">  <h4><?php echo ucwords($detail_kandidat['nama']); ?></h4></div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <h4>Email :</h4></div>
                    <div class="col-md-9">  <h4><?php echo ucwords($detail_kandidat['email']); ?></h4></div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <h4>Jenis Kelamin : </h4></div>
                    <div class="col-md-9"><h4><?php echo ucwords($detail_kandidat['jk']); ?></h4></div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"><h4>Tanggal Lahir :</h4></div>
                    <div class="col-md-9"><h4><?php echo date('d F Y' , strtotime($detail_kandidat['tgl_lahir'])); ?></h4></div>
                  </div>
                  <div class="row">
                    <div class="col-md-3"> <h4>Telepon :</h4></div>
                    <div class="col-md-9"><h4><?php echo ucwords($detail_kandidat['telp']); ?></h4></div>
                  </div>
                  <div class="row"> 
                    <div class="col-md-3"> <h4>Alamat :</h4></div>
                    <div class="col-md-9"><h4><?php echo ucwords($detail_kandidat['alamat']); ?></h4></div>
                  </div>
              </div>
            </div>
         </div>   

  