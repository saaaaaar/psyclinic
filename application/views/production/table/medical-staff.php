<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medical Staff</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
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
              <div class="title_left">
                <h3 style="margin-bottom: 30px;">Registered Medical Staffs <small>Psyclinic</small></h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Medical Staffs’ General Information</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      <li><a href="#" ><i class="fa fa-wrench"></i></a></li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  <a href="<?php echo base_url('Core_controller/nextpages/form/medical-staff')?>"><button type="submit" class="btn btn-info" style="margin-bottom: 20px;">Add Medical Staff</button></a>

                    <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Tanggal Daftar</th>
                          <th>Nama</th>
                          <th>Jenis Kelamin</th>
                          <th>Nomor Induk Pegawai</th>
                          <th>Alamat</th>
                          <th>Jabatan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($pengguna as $key) { ?>

                          <tr>
                            <td><?php echo $key['tanggal_daftar']?></td>
                            <td><?php echo $key['nama']?></td>
                            <td><?php echo $key['jenis_kelamin']?></td>
                            <td><?php echo $key['no_identitas']?></td>
                            <td><?php echo $key['alamat']?></td>
                            <td><?php echo $key['jabatan']?></td>
                            <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Hapus</button>
                              <a href="<?php echo base_url(). 'Admin/edit/' .$key['id_pengguna']?>"><button class="btn btn-info">Edit</button></a>
                            </td>
                          </tr>

                        <?php } ?>

                        <!--modals-->
                        <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel2">Remove Data</h4>
                              </div>
                              <div class="modal-body">
                                <h4>Are you sure for delete <?php echo $key['nama']?>'s data?</h4>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <a href="<?php echo base_url(). 'Admin/hapus/' .$key['id_pengguna']?>"><button type="button" class="btn btn-danger">Yes! Delete it.</button></a> 
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /modals -->                        
                      </tbody>
                    </table>
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
    <!-- iCheck -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url();?>/assets/dashboard/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>/assets/dashboard/build/js/custom.min.js"></script>

  </body>
</html>