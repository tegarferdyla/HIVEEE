       <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Data Lowongan
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" >Master Vacancy</a></li>
                <li class="breadcrumb-item active" aria-current="page">Active Vacancy</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Vacancy Active</h4>                    
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-right"><a href="<?=site_url("admin/cetaklowonganaktive")?>" alt="Print Laporan" target = _blank><i class= "mdi mdi-printer"></i> Print Laporan </a></h6>
                    </div>
                  </div>
                  <p class="card-description">
                    Menampilkan daftar lowongan yang telah terdaftar dan berstatus aktif.
                  </p>
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr class ="text-center">
                        <th>No</th>
                        <th>Nama Lowongan</th>
                        <th>Kategori</th>
                        <th>Agency / Perusahaan</th>
                        <th>Batas Pendaftaran</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                        <?php foreach ($active as $a) { ?>
                          <tr class="text-center">
                            <td> <?php echo ($no++); ?> </td>
                            <td> <?php echo ($a->nama_lowongan); ?></td>
                            <td><?php echo($a->kategori); ?></td>
                            <td><?php echo($a->nm_perusahaan); ?></td>
                            <td><?php echo($a->bataspendaftaran); ?></td>
                            <td class="text-center">
                              <!-- <a class="btn btn-info" href="<?=site_url("admin/cekdetail/$a->id_kandidat") ?>" title="Cek Details"><i class="mdi mdi-account-card-details"></i></a> --> 
                              <a class="btn btn-danger" href="<?=site_url("admin/nonaktifkanlowongan/$a->id_lowongan")?>" title ="Non Aktifkan Lowongan"><i class="mdi mdi-close-box"></i> </a>
                              
                            </td>
                          </tr>
                        <?php } ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
         </div>   