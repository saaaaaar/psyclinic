        
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url(). 'admin'?>" class="site_title">
                <div class="profile clearfix">
                  <div class="profile_pic" style="margin-top: 5px; margin-right: 0;">
                    <img src="<?php echo base_url('assets/dashboard/build/images/logo4.png')?>">
                  </div>
                    <span style="margin-left: 0;">PsyClinic</span>
                </div>
              </a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo base_url('assets/dashboard/build/images/img.jpg')?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $this->session->userdata('nama');?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <?php $akses = $this->session->userdata('kode_akses');?>

          <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3><?php echo $this->session->userdata('jabatan');?></h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Admin');?>">Dashboard</a></li>
                    </ul>
                  </li>
                  <?php if($akses !=2){?>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <?php 
                        if($akses == 0){ ?>
                          <li><a href="<?php echo base_url('Core_controller/nextpages/form/medical-staff')?>">Medical Staff Form</a></li>
                      <?php } 
                        elseif($akses == 1){ ?>
                          <li><a href="<?php echo base_url('Core_controller/nextpages/form/registration')?>">Patient Registration</a></li>
                      <?php } ?>
                    </ul>
                  </li>
                  <?php }?>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">

                      <?php
                        if($akses == 0){ ?>
                          <li><a href="<?php echo base_url('Admin/tampilKaryawan')?>">Medical Staff Table</a></li>
                          <li><a href="<?php echo base_url('Perawat')?>">Patient Table</a></li>
                          <li><a href="<?php echo base_url('Admin/kuesioner')?>">Kuesioner Result</a></li>
                      <?php } 
                        elseif($akses == 1){ ?>
                          <li><a href="<?php echo base_url('Perawat')?>">Patient Table</a></li>
                      <?php }
                        else{ ?>
                            <li><a href="<?php echo base_url('Psikiater')?>">Patient Table</a></li>
                      <?php }?>

                    </ul>
                  </li>
                  <?php if($akses == 0){?>
                  <li><a><i class="fa fa-desktop"></i> Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url('Core_controller/nextpages/form/artikel')?>">New Article</a></li>
                      <li><a href="<?php echo base_url('C_News/posts')?>">Posts</a></li>
                    </ul>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

         <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li style="font-size: 14px;">
                  <a href="<?php echo base_url('Core_controller/keluar')?>"> Log Out</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->