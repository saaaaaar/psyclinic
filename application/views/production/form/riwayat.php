<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>History Form</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>/assets/dashboard/build/css/custom.min.css" rel="stylesheet">
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
                <h3>Form Riwayat</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <?php foreach($pasien as $p){?>
                    <h2> Masukkan kelengkapan data riwayat atas nama <?php echo $p['nama']?> dengan mengisikan informasi pada kolom di bawah ini</h2>
                    <?php }?>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a href="#"><i class="fa fa-wrench"></i></a></li>
                      <li><a class="#"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form id="demo-form2" class="form-horizontal form-label-left" method="POST" action="<?php echo base_url('Perawat/tambahRiwayat')?>">
                      <!--Riwayat penyakit gangguan kejiwaan pasien-->
                      <h2>Riwayat Penyakit Lalu</h2>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style="text-align: left;">Pernah Mengalami Gangguan Jiwa?</label>
                        <input type="hidden" name="id_pasien" value="<?php echo $p['id_pasien']?>">
                        <div class="col-md-7 col-sm-7 col-xs-7">
                          <div style="padding-top: 6px;">
                            <input type="radio" class="flat" name="pasien" value="Ya" checked>
                            <a>Ya</a>
                            <input type="radio" class="flat" name="pasien" value="Tidak">
                            <a>Tidak</a>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Penjelasan :</label>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                          <textarea class="form-control" rows="4" name="penjelasan_pasien"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style="text-align: left;">Pengobatan Sebelumnya</label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <input type="text" class="form-control" name="pengobatan_pasien">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style="text-align: left;">Bentuk Pengobatan</label>
                        <div class="col-md-6 col-sm-6 col-xs-6">
                          <input type="text" class="form-control" name="bentuk_pengobatan">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3" style="text-align: left;">Pernah Mengalami Penyakit Fisik?</label>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                          <div style="padding-top: 6px;">
                            <input type="radio" class="flat" name="fisik" value="Ya" checked>
                            <a>Ya</a>
                            <input type="radio" class="flat" name="fisik" value="Tidak">
                            <a>Tidak</a>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Penjelasan :</label>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                          <textarea class="form-control" rows="4" name="penjelasan_fisik"></textarea>
                        </div>
                      </div>

                      <!--Riwayat Psikososial pasien-->
                      <h2 style="padding-top: 15px;">Riwayat Psikososial</h2>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Jenis Kejadian :</label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                          <input type="text" class="form-control" name="jenis_kejadian">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Penjelasan :</label>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                          <textarea class="form-control" rows="4" name="penjelasan_kejadian"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-4" style="text-align: left;">Ada Pengalaman Yang Tidak Menyenangkan?</label>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                          <div style="padding-top: 6px;">
                            <input type="radio" class="flat" name="pengalaman" value="Ya" checked>
                            <a>Ya</a>
                            <input type="radio" class="flat" name="pengalaman" value="Tidak">
                            <a>Tidak</a>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Penjelasan :</label>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                          <textarea class="form-control" rows="4" name="penjelasan_pengalaman"></textarea>
                        </div>
                      </div>

                      <!--Riwayat Keluarga-->
                      <h2 style="padding-top: 15px;">Riwayat Keluarga</h2>

                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-4" style="text-align: left;">Ada Keluarga Yang Mengalami Gangguan Jiwa?</label>
                        <div class="col-md-7 col-sm-7 col-xs-7">
                          <div style="padding-top: 6px;">
                            <input type="radio" class="flat" name="keluarga" value="Ya" checked>
                            <a>Ya</a>
                            <input type="radio" class="flat" name="keluarga" value="Tidak">
                            <a>Tidak</a>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left; padding-right: 0;">Hub. Keluarga :</label>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <input type="text" class="form-control" name="hubungan">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-2" style="text-align: left;">Penjelasan :</label>
                        <div class="col-md-7col-sm-7 col-xs-7">
                          <textarea class="form-control" rows="4" name="penjelasan_keluarga"></textarea>
                        </div>
                      </div>

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group" align="center" style="padding-top: 60px;">
                        <a href="<?php echo base_url('Perawat');?>"><button class="btn btn-primary" type="button">Cancel</button></a>
                        <button class="btn btn-primary" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/assets/dashboard/build/js/custom.min.js"></script>
	
  </body>
</html>
