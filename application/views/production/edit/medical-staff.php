<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title>Psyclinic - Medical Staff</title>

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
                <h3>Form Medical Staff</h3>
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

                    <form id="demo-form2" class="form-horizontal form-label-left" method="POST" action="<?php echo base_url('Admin/update')?>">

                      <?php foreach ($pengguna as $key) { ?>

                      <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>Jabatan*</label>
                        <select class="form-control" name="kode_akses" required="">
                          <option>--Pilih Jabatan--</option>
                          <option <?php if($key['kode_akses'] == 1){echo "selected";}?> value="1">Perawat</option>
                          <option <?php if($key['kode_akses'] == 2){echo "selected";}?> value="2">Psikiater</option>
                        </select>
                      </div>

                      <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>NIP* <small style="padding-left: 10px;">Ex: 19990906-202004-2-002</small></label>
                        <input type="hidden" name="id" value="<?php echo $key['id_pengguna']?>">
                        <input type="text" class="form-control" name="nip" required="" value="<?php echo $key['no_identitas']?>">
                      </div>

                      <div class="col-md-4 col-sm-12 col-xs-12 form-group">
                        <label>Tanggal Masuk*</label>
                        <input type="date" name="tanggal_masuk" class="form-control" required="" value="<?php echo $key['tanggal_daftar']?>">
                      </div>
                      
                      <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                        <label>Nama Lengkap*</label>
                        <input type="text" class="form-control" name="nama" required="" value="<?php echo $key['nama']?>">
                      </div>

                      <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <label>Agama</label>
                        <select class="form-control" name="agama">
                          <option selected value="Islam">Islam</option>
                          <option value="Kristen">Kriten</option>
                          <option value="Khatolik">Khatolik</option>
                          <option value="Budha">Budha</option>
                          <option value="Hindu">Hindu</option>
                        </select>
                      </div>

                      <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $key['tanggal_lahir']?>">
                      </div>

                      <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <label style="padding-right: 10px;">Jenis Kelamin</label>
                        <div style="padding-top: 6px;">
                          <input type="radio" class="flat" checked name="gender" value="Perempuan">
                          <a>Perempuan</a>
                          <input type="radio" class="flat" name="gender" value="Laki-Laki">
                          <a>Laki-Laki</a>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <label style="padding-right: 10px;">Status</label>
                        <div style="padding-top: 6px;">
                          <input type="radio" class="flat" checked name="status" value="Menikah">
                          <a>Menikah</a>
                          <input type="radio" class="flat" name="status" value="Belum Menikah">
                          <a>Belum Menikah</a>
                        </div>
                      </div>

                      <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <label>No.Telepon / HP</label>
                        <input type="text" name="no_telepon" class="form-control" value="">
                      </div>

                      <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="example@igniter.com" value="">
                      </div>

                      <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                        <label>Alamat*</label>
                        <textarea class="form-control" placeholder="isikan alamat anda sekarang" name="alamat" rows="4" required=""><?php echo $key['alamat']?></textarea>
                      </div>

                      <div class="col-md-12 col-sm-12 col-xs-12 form-group" align="center" style="padding-top: 60px;">
                        <a href="<?php echo base_url('Admin/tampilKaryawan');?>"><button class="btn btn-primary" type="button">Cancel</button></a>
                        <button type="submit" class="btn btn-success">Save Change</button>
                      </div>

                      <?php }?>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
        
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
