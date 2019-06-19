<!DOCTYPE html>
<html lang="id">
<head>
    <style>
    @media print
    {    
        .no-print, .no-print *
        {
            display: none !important;
        }
    }
    .body{
        line-height: normal;
        font-family: open sans, tahoma, sans-serif;
        margin: 0;
        -webkit-print-color-adjust: exact
    }
    .header {
        background-color: #006666;
        align-items: center;
        display: flex;
        padding: 20px;
    }
    .col-yellow {
        color: #fede00;
    }
    .bg-tosca {
        background-color: #006666;
    }
    .bg-grey {
        background-color: rgba(222, 238, 221, 0.8);
    }
    .col-white {
        color: #FFFFFF;
    }
    .col-tosca {
        color: #006666;
        -webkit-print-color-adjust: exact;
    }
    .col-header {
        background-color : #fede00;
    }
    .p-5 {
        padding: 5px;
    }
    .p-10 {
        padding: 10px;
    }
    .p-20 {
        padding: 20px;
    }
    .center {
        text-align: center;
    }
    .cetak {
        text-align: right;
        padding-right: 15px;
    }
    .nama-mitra {
        font-size: 13px; font-weight: 600;
    }
    .isi-laporan {
        width: 100%;text-align: center; border: 1px solid rgba(0,0,0,0.1); padding: 8px 15px 8px 15px;
    }
</style>
<title>Cetak Laporan</title>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css"> -->
</head>
<body>
    <div style="background: url(assets/laporan/logo-tni-opacity.png) center no-repeat;background-size: contain;width: 790px;">
        <table width="790" cellspacing="0" cellpadding="0" class="container" style="width: 790px; padding: 20px;">
            <tr>
                <td>
                    <table width="100%" cellspacing="0" cellpadding="0" class="p-20">
                        <tbody>
                            <tr>
                                <td colspan="2">
                                    <!-- <img src="<?php echo base_url('assets/img/hivee.png') ?>" alt="Logo HIVEE" width="40%""> -->
                                </td>
                                <td class="cetak no-print" colspan="2">
                                    <a style="color: #42B549; font-size: 14px; text-decoration: none;" href="javascript:window.print()">
                                        <span style="vertical-align: middle;">Cetak</span>
                                        <img src="<?php echo base_url('assets/laporan/print.png')?>" style="vertical-align: middle;height: 20px;width: 20px;">
                                    </a>
                                </td>                                
                            </tr>
                        </tbody>
                    </table>
                    <table width="100%" cellspacing="0" cellpadding="1" style="width: 100%;">
                        <tbody>
                            <tr class="col-header nama-mitra">
                                
                                <td style="padding: 20px;" colspan="1">
                                    <img style="float: left;" src="<?php echo base_url('assets/img/hivee.png')?> "  alt="Logo Hivee" width="290" height="85">
                                </td>
                                <td style="padding: 20px;" colspan="3">
                                    <h2 class="col-white">Laporan Perusahaam Aktive</h2>
                                    <small class="col-white"><i>Berikut adalah laporan dari daftar perusahaan yang berstatus aktif</i></small>
                                </td>
                            </tr>
                            <tr style="font-size: 13px;">
                                <td style="font-weight: 600;" colspan="3" class="col-tosca">
                                   <p style="float: left;">
                                    <?php  echo date('l, d/M/y');?>
                                   </p>
                                </td>
                                <td style="font-weight: 600;" class="col-tosca" style="padding: 20px;" colspan="1">
                                   <p style="float: right;"> <?php echo date("h : i : s"); ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <hr size="10" noshade style="background-color: #fede00; border: none;">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table width="100% isi-laporan">
                        <tbody>
                            <tr>
                                <td class="p-10 col-white bg-tosca">NO</td>
                                <td class="p-10 col-white bg-tosca">ID PERUSAHAAN</td>
                                <td class="p-10 col-white bg-tosca">NAMA PERUSAHAAN</td>
                                <td class="p-10 col-white bg-tosca">EMAIL</td>
                                <td class="p-10 col-white bg-tosca">HANDPHONE</td>
                                <td class="p-10 col-white bg-tosca">STATUS</td>
                            </tr>
                            <?php $no=1; ?>
                        <?php foreach ($active as $a) { ?>
                                <tr style="font-size: 13px;" class="bg-grey">
                                    <td class="p-10 center"><?php echo $no++; ?></td>
                                    <td class="p-10 center"><?php echo ucwords($a->id_perusahaan); ?> </td>
                                    <td class="p-10 center"><?php echo ucwords($a->nm_perusahaan); ?> </td>
                                    <td class="p-10 center"><?php echo ucwords($a->email); ?> </td>
                                    <td class="p-10 center"><?php echo ucwords($a->telp); ?> </td>
                                    <td class="p-10 center">ACTIVE</td>
                                </tr>
                           <?php } ?>     
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>