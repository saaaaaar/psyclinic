<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Patient Registration</title>

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
                <h3>Form Registration</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Silahkan lakukan registrasi pasien baru dengan mengisikan kelengkapan data psikiater pada kolom isian di bawah ini: </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a href="#"><i class="fa fa-wrench"></i></a></li>
                      <li><a class="#"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form id="demo-form2" class="form-horizontal form-label-left" action="<?php echo base_url(). 'Perawat/tambah'?>" method="POST">

                      <div class="col-md-4 col-sm-3 col-xs-12 form-group">
                        <label>Tanggal Masuk*</label>
                        <input type="date" name="tanggal_masuk" class="form-control" required="">
                      </div>
                      
                      <div class="col-md-4 col-sm-5 col-xs-12 form-group">
                        <label>No. RM</label>
                        <input type="text" name="no_rm" class="form-control" required="">
                      </div>

                      <div class="col-md-4 col-sm-4 col-xs-12 form-group">
                        <label>No Identitas* <small style="padding-left: 10px;">Ex: 9990906189231076</small></label>
                        <input type="text" class="form-control" name="no_id" required="">
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label>Nama Lengkap*</label>
                        <input type="text" class="form-control" name="nama" required="">
                      </div>

                      <div class="col-md-3 col-sm-3 col-xs-12 form-group">
                        <label>Agama</label>
                        <select class="form-control" name="agama">
                          <option selected value="Islam">Islam</option>
                          <option value="Kristen">Kriten</option>
                          <option value="Khatolik">Khatolik</option>
                          <option value="Budha">Budha</option>
                          <option value="Hindu">Hindu</option>
                        </select>
                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-12 form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control">
                      </div>

                      <div class="col-md-4 col-sm-5 col-xs-12 form-group">
                        <label>No.Telepon / HP</label>
                        <input type="text" name="no_telepon" class="form-control">
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label style="padding-right: 10px;">Jenis Kelamin</label>
                        <div style="padding-top: 6px;">
                          <input type="radio" class="flat" checked name="gender" value="Perempuan">
                          <a>Perempuan</a>
                          <input type="radio" class="flat" name="gender" value="Laki-Laki">
                          <a>Laki-Laki</a>
                        </div>
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label style="padding-right: 10px;">Status</label>
                        <div style="padding-top: 6px;">
                          <input type="radio" class="flat" checked name="status" value="Menikah">
                          <a>Menikah</a>
                          <input type="radio" class="flat" name="status" value="Belum Menikah">
                          <a>Belum Menikah</a>
                        </div>
                      </div>

                      <div class="col-md-9 col-sm-12 col-xs-12 form-group">
                        <label>Alamat*</label>
                        <textarea class="form-control" placeholder="isikan alamat anda sekarang" name="alamat" rows="4" required=""></textarea>
                      </div>

                      <div class="col-md-12 col-sm-12 col-xs-12" style="margin: 30px 0 10px 0;">
                        <h2><label class="control-label col-md-12 col-sm-12 col-xs-12" style="text-align: left; padding-left: 0;">Penanggung Jawab</label></h2>
                      </div>

                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama_penanggung" class="form-control">
                      </div>

                      <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>No. Telepon/HP</label>
                        <input type="text" name="no_telp_penanggung" class="form-control">
                      </div>

                      <div class="col-md-3 col-sm-6 col-xs-12 form-group">
                        <label>Hubungan</label>
                        <input type="text" name="hubungan" class="form-control">
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label style="padding-right: 10px;">Jenis Kelamin</label>
                        <div style="padding-top: 6px;">
                          <input type="radio" class="flat" checked name="gender_penanggung" value="Perempuan">
                          <a>Perempuan</a>
                          <input type="radio" class="flat" name="gender_penanggung" value="Laki-Laki">
                          <a>Laki-Laki</a>
                        </div>
                      </div>

                      <div class="col-md-9 col-sm-12 col-xs-12 form-group">
                        <label>Alamat*</label>
                        <textarea class="form-control" placeholder="isikan alamat anda sekarang" name="alamat_penanggung" rows="4" required=""></textarea>
                      </div>

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group" align="center" style="padding-top: 60px;">
                        <a href="<?php echo base_url('perawat');?>"><button class="btn btn-primary" type="button">Cancel</button></a>
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
