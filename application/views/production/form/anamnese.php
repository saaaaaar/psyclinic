<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Anamnese Form</title>

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
                <h3>Anamnese</h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Masukkan kelengkapan data anamnese dengan mengisikan informasi pada kolom di bawah ini</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a href="#"><i class="fa fa-wrench"></i></a></li>
                      <li><a class="#"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <form id="demo-form2" class="form-horizontal form-label-left" method="POST" action="<?php echo base_url('Perawat/tambahAnamnese')?>">
                      <?php foreach($data as $key){?>

                      <div class="col-md-2 col-sm-3 col-xs-12 form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control" required="" value="<?php echo $key['tanggal_masuk']?>">
                      </div>

                      <div class="col-md-2 col-sm-4 col-xs-12 form-group">
                        <label>Psikiater Jaga</label>
                        <select class="form-control" name="psikiater">
                          <option selected>---Pilih Psikiater---</option>
                          <?php foreach($psikiater as $daftar){?>
                            <option value="<?php echo $daftar['id_pengguna']?>"><?php echo $daftar['nama']?></option>
                          <?php }?>
                        </select>
                      </div>

                      <div class="col-md-3 col-sm-4 col-xs-12 form-group">
                        <label>No. RM</label>
                        <input type="text" class="form-control" value="<?php echo $key['no_rm']?>">
                      </div>

                      <div class="col-md-4 col-sm-6 col-xs-12 form-group">
                        <label>Nama Pasien</label>
                        <input type="hidden" name="id_pasien" class="form-control" value="<?php echo $key['id_pasien']?>">
                        <input type="text" class="form-control" value="<?php echo $key['nama']?>">
                      </div>
                      <?php }?>
                      
                      <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                        <label style="padding-right: 10px;">Kesan Awal</label>
                        <div style="padding-top: 6px;">
                          <input type="radio" class="flat" checked name="kesan" value="Extrovert">
                          <a>Extrovert</a>
                          <input type="radio" class="flat" name="kesan" value="Introvert">
                          <a>Introvert</a>
                        </div>
                      </div>

                      <div class="col-md-2 col-sm-2 col-xs-6 form-group">
                        <label>Tek. Darah</label>
                        <input type="text" class="form-control" name="tek_darah" required="">
                      </div>

                      <div class="col-md-2 col-sm-2 col-xs-6 form-group">
                        <label>Suhu</label>
                        <input type="text" class="form-control" name="suhu" required="">
                      </div>

                      <div class="col-md-2 col-sm-2 col-xs-6 form-group">
                        <label>Nadi</label>
                        <input type="text" name="nadi" class="form-control">
                      </div>

                      <div class="col-md-2 col-sm-2 col-xs-6 form-group">
                        <label>Tinggi Badan</label>
                        <input type="text" name="tinggi_badan" class="form-control">
                      </div>

                      <div class="col-md-2 col-sm-2 col-xs-6 form-group">
                        <label>Berat Badan</label>
                        <input type="text" name="berat_badan" class="form-control">
                      </div>

                      <div class="col-md-2 col-sm-2 col-xs-6 form-group">
                        <label>Gol. Darah</label>
                        <select class="form-control" name="gol_dar">
                          <option selected>---Golongan Darah---</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="O">O</option>
                          <option value="AB">AB</option>
                        </select>
                      </div>

                      <div class="col-md-9 col-sm-12 col-xs-12 form-group">
                        <label>Pemeriksaan Fisik</label>
                        <textarea class="form-control" name="pem_fisik" rows="4" required=""></textarea>
                      </div>

                      <div class="col-md-9 col-sm-12 col-xs-12 form-group">
                        <label>Alasan Masuk</label>
                        <textarea class="form-control" name="alasan_masuk" rows="4" required=""></textarea>
                      </div>

                      <div class="col-md-9 col-sm-6 col-xs-12 form-group">
                        <label>Keluhan Awal</label>
                        <textarea class="form-control" name="keluhan" rows="4" required=""></textarea>
                      </div>

                      <div class="col-md-9 col-sm-12 col-xs-12 form-group">
                        <label>Diagnosa</label>
                        <input type="text" name="diagnosa" class="form-control">
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
