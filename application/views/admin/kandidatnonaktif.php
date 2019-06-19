      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Data Kandidat
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" >Master Job Seeker</a></li>
                <li class="breadcrumb-item active" aria-current="page">Non Active Job Seeker</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title">Data Kandidat Non Active</h4>                    
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-right"><a href="<?=site_url("admin/cetakkandidatnonaktive")?>" alt="Print Laporan" target = _blank><i class= "mdi mdi-printer"></i> Print Laporan </a></h6>
                    </div>
                  </div>
                  <p class="card-description">
                    Menampilkan daftar kandidat yang telah terdaftar namun sudah tidak aktif.
                  </p>
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr class ="text-center">
                        <th>No</th>
                        <th>ID Kandidat</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Handphone</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                        <?php foreach ($nonactive as $a) { ?>
                          <tr class="text-center">
                            <td> <?php echo ($no++); ?> </td>
                            <td><?php echo ($a->id_kandidat); ?></td>
                            <td><?php echo ucwords($a->nama); ?></td>
                            <td><?php echo ucwords($a->email); ?></td>
                            <td><?php echo ucwords($a->telp); ?></td>
                            <td class="text-center">
                              <a class="btn btn-info" href="<?=site_url("admin/cekdetail/$a->id_kandidat") ?>" title="Cek Details"><i class="mdi mdi-account-card-details"></i></a> <a class="btn btn-success" href="<?=site_url("admin/aktifkankandidat/$a->id_kandidat")?>" title ="Aktifkan Akun Kembali"><i class="mdi mdi-account-check"></i> </a>
                              
                            </td>
                          </tr>
                        <?php } ?>  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
         </div>   

  