<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Psyclinic - Dashboard</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/assets/dashboard/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>/assets/dashboard/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>/assets/dashboard/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url(); ?>/assets/dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>/assets/dashboard/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        <?php
          include "navigation-bar.php";
        ?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left" style="margin-bottom: 20px;">
                <?php if($this->session->userdata('kode_akses') == 1){?>
                <a href="<?php echo base_url('Perawat');?>"><button class="btn btn-info">Back to Table</button></a>
                <?php }else{?>
                <a href="<?php echo base_url('Psikiater');?>"><button class="btn btn-info">Back to Table</button></a>
                <?php }?>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a href="#"><i class="fa fa-wrench"></i></a></li>
                      <li><a class="#"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="<?php echo base_url();?>/assets/dashboard/build/images/user.png" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <?php foreach($pasien as $p){?>
                      <h3 class="green"><?php echo $p['nama']?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-briefcase user-profile-icon"></i> <?php echo $p['no_rm']?></li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $p['alamat']?></li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $p['no_telp']?></li>
                      </ul>
                      <?php }?>

                      <h4 style="padding-top: 10px; padding-bottom: 0;">Alasan Masuk</h4>
                      <?php foreach($anamnese as $a){?>
                        <p><?php echo $a['alasan_masuk']?></p>
                      <?php }?>

                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist" style="margin-bottom: 20px;">
                          <li role="presentation" class="active">
                            <a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Data Pasien</a>
                          </li>
                          <li role="presentation"  class="">
                            <a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Riwayat Penyakit</a>
                          </li>
                          <li role="presentation" class="">
                            <a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Anamnese</a>
                          </li>
                          <?php if($this->session->userdata('kode_akses') == 2){?>
                            <li role="presentation" class="">
                              <a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Hasil Pemeriksaan</a>
                            </li>
                          <?php }?>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab" style="padding-bottom: 47px;">

                            <form class="form-horizontal">
                              <h2>Data Diri Pasien</h2>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-2" style="text-align: left; padding-right: 0;">Tanggal Masuk</label>
                                <div class="col-md-2 col-sm-2 col-xs-3">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $p['tanggal_masuk']?>">
                                </div>
                                <label class="control-label col-md-2 col-sm-3 col-xs-2" style="padding-right: 0;">No. Identitas</label>
                                <div class="col-md-3 col-sm-3 col-xs-4">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $p['no_identitas']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-2" style="text-align: left;">Jenis Kelamin</label>
                                <div class="col-md-2 col-sm-2 col-xs-3">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $p['jenis_kelamin']?>">
                                </div>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" style="text-align: right;">Status</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $p['pernikahan']?>">
                                </div>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" style="text-align: right;">Agama</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $p['agama']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-3 col-xs-2" style="text-align: left;">Tanggal Lahir</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $p['tanggal_lahir']?>">
                                </div>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" style="text-align: right;">Umur</label>
                                <div class="col-md-1 col-sm-1 col-xs-1" style="padding-right: 3px;">
                                  <input type="text" class="form-control" readonly="readonly">
                                </div>
                                <label class="control-label" style="text-align: left;">Tahun</label>
                              </div>

                              <h2 style="padding-top: 15px;">Penanggung Jawab</h2>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-3" style="text-align: left;">Nama Lengkap</label>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $p['nama_penanggung']?>">
                                </div>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" style="text-align: right;">No.Telp</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $p['no_telp_penanggung']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-3" style="text-align: left;">Jenis Kelamin</label>
                                <div class="col-md-2 col-sm-2 col-xs-3">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $p['jenis_kelamin_penanggung']?>">
                                </div>
                                <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: right;">Hubungan</label>
                                <div class="col-md-3 col-sm-3 col-xs-3" style="margin-left: 0;">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $p['hubungan']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-3" style="text-align: left;">Alamat</label>
                                <div class="col-md-9 col-sm-9 col-xs-9">
                                  <textarea class="form-control" readonly="readonly" rows="3"><?php echo $p['alamat_penanggung']?></textarea>
                                </div>
                              </div>
                            </form>

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                            <!--Riwayat Penyakit-->
                            <form class="form-horizontal">
                              <?php foreach($riwayat as $r){?>
                              <!--Riwayat penyakit gangguan kejiwaan pasien-->
                              <h2>Riwayat Penyakit Lalu</h2>

                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-4" style="text-align: left;">Pernah Mengalami Gangguan Jiwa?</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $r['pasien'];?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Penjelasan :</label>
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                  <textarea class="form-control" readonly="readonly" rows="4"><?php echo $r['penjelasan_pasien']?></textarea>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3" style="text-align: left;">Pengobatan Sebelumnya</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $r['pengobatan_pasien']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3" style="text-align: left;">Bentuk Pengobatan</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $r['bentuk_pengobatan']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-4" style="text-align: left;">Pernah Mengalami Penyakit Fisik?</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $r['fisik']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Penjelasan :</label>
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                  <textarea class="form-control" readonly="readonly" rows="4"><?php echo $r['penjelasan_fisik']?></textarea>
                                </div>
                              </div>

                              <!--Riwayat Psikososial pasien-->
                              <h2 style="padding-top: 15px;">Riwayat Psikososial</h2>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Jenis Kejadian :</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $r['jenis_kejadian']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Penjelasan :</label>
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                  <textarea class="form-control" readonly="readonly" rows="4"><?php echo $r['penjelasan_kejadian']?></textarea>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-5 col-sm-5 col-xs-5" style="text-align: left;">Ada Pengalaman Yang Tidak Menyenangkan?</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $r['pengalaman']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Penjelasan :</label>
                                <div class="col-md-7 col-sm-7 col-xs-7">
                                  <textarea class="form-control" readonly="readonly" rows="4"><?php echo $r['penjelasan_pengalaman']?></textarea>
                                </div>
                              </div>

                              <!--Riwayat Keluarga-->
                              <h2 style="padding-top: 15px;">Riwayat Keluarga</h2>

                              <div class="form-group">
                                <label class="control-label col-md-5 col-sm-5 col-xs-5" style="text-align: left;">Ada Keluarga Yang Mengalami Gangguan Jiwa?</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $r['keluarga']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left; padding-right: 0;">Hub. Keluarga :</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                  <input type="text" class="form-control" readonly="readonly"value="<?php echo $r['hubungan']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Penjelasan :</label>
                                <div class="col-md-7col-sm-7 col-xs-7">
                                  <textarea class="form-control" readonly="readonly" rows="4"><?php echo $r['penjelasan_keluarga']?></textarea>
                                </div>
                              </div>

                              <?php }?>
                            </form>

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab2">

                            <!--Anamnese-->
                            <form class="form-horizontal">
                              <?php foreach($anamnese as $a){?>
                              <h2>Anamnese</h2>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-3">Kesan Pertama Client</label>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $a['kesan']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2">Keluhan Awal</label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                  <textarea class="form-control" readonly="readonly" rows="4"><?php echo $a['keluhan_awal']?></textarea>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2">Tanda Vital</label>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1">TD</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $a['tekanan_darah']?>">
                                </div>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" style="text-align: right;">Suhu</label>
                                <div class="col-md-1 col-sm-1 col-xs-1">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $a['suhu']?>">
                                </div>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" style="text-align: right;">Nadi</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $a['nadi']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2">Ukur</label>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1">TB</label>
                                <div class="col-md-1 col-sm-1 col-xs-1" style="padding-right: 0;">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $a['tinggi_badan']?>">
                                </div>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" style="text-align: left;">cm</label>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" style="text-align: right;">BB</label>
                                <div class="col-md-1 col-sm-1 col-xs-1" style="padding-right: 0;">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $a['berat_badan']?>">
                                </div>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" style="text-align: left;">kg</label>
                                <label class="control-label col-md-1 col-sm-1 col-xs-1" style="padding-top: 0;">Gol. Darah</label>
                                <div class="col-md-1 col-sm-1 col-xs-1">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $a['gol_dar']?>">
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-2">Pemeriksaan Fisik</label>
                                <div class="col-md-8 col-sm-8 col-xs-8">
                                  <textarea class="form-control" readonly="readonly" rows="4"><?php echo $a['pemeriksaan_fisik']?></textarea>
                                </div>
                              </div>

                              <div class="form-group">
                                <label class="control-label col-md-2 col-sm-2 col-xs-3" style="text-align: left; padding-right: 0;">Diagnosa Masuk</label>
                                <div class="col-md-7 col-sm-7 col-xs-6">
                                  <input type="text" class="form-control" readonly="readonly" value="<?php echo $a['diagnosa']?>">
                                </div>
                              </div>
                              <?php }?>
                            </form>

                          </div>
                          <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab3" style="margin-bottom: 270px">

                            <div class="pull-right" style="margin-top: 10px;">
                              <a href="<?php echo base_url(). 'Psikiater/form/'.$p['id_pasien']?>">
                                <button type="submit" class="btn btn-info">Add Medical Record</button>
                              </a>
                            </div>
                            <!-- Hasil Pemeriksaan -->
                            <table class="data table table-striped no-margin">
                              <thead>
                                <tr>
                                  <th>Tanggal Periksa</th>
                                  <th>Masalah</th>
                                  <th>Diagnosa</th>
                                  <th>Obat</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach($hasil as $h){?>
                                  <tr>
                                    <td><?php echo $h['tanggal_periksa']?></td>
                                    <td><?php echo $h['masalah']?></td>
                                    <td><?php echo $h['diagnosa']?></td>
                                    <td>Paracetamol</td>
                                  </tr>
                                <?php }?>
                              </tbody>
                            </table>
                            
                          </div>


                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div clas="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>/assets/dashboard/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>/assets/dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo bse_url(); ?>/assets/dashboard/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>/assets/dashboard/vendors/nprogress/nprogress.js"></script>
    <!-- morris.js -->
    <script src="<?php echo base_url(); ?>/assets/dashboard/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/dashboard/vendors/morris.js/morris.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>/assets/dashboard/vndors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url(); ?>/assets/dashboard/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>/assets/dashboard/build/js/custom.min.js"></script>

  </body>
</html>