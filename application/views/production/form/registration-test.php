<!DOCTYPE html>
<html>
<head>
  <title>Registration - Psyclinic</title>
  <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/dashboard/build/css/style.css">
  <script src="<?php echo base_url(); ?>assets/dashboard/build/js/regis.js"></script>
</head>

<body>
  <div id="formWrapper">
    <form id="form" action="<?php echo base_url('core_controller/registration');?>" class="form" method="POST">
      <div class="logo" style="margin: 5px auto 50px auto;">
        <img src="<?php echo base_url('assets/dashboard/build/images/logo2.png')?>" width="30%" height="30%">
      </div>
      <div class="form-item">
        <p class="formLabel">Nama</p>
          <input type="text" name="nama" id="nama" class="form-style" autocomplete="off">
      </div>
      <div class="form-item" style="padding-left: 20px;">
        <div class="formLabel" style="color: #bcbcbc;">Jenis Kelamin</div>
        <div style="padding-top: 6px;">
          <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
          <a>Perempuan</a>
          <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-Laki">
          <a>Laki-Laki</a>
        </div>
      </div>

      <div class="form-item">
        <p class="formLabel">Tahun Lahir</p>
          <input type="text" name="tahun" id="tahun" class="form-style" autocomplete="off">
      </div>
      <div class="form-item">
        <p class="formLabel">Daerah</p>
          <input type="text" name="daerah" id="daerah" class="form-style" autocomplete="off">
        <p style="margin-left: 10px;">
          <u><a href="<?php echo base_url('')?>"><small>Cancel</small></a></u>
        </p>
      </div>  
      <div class="button">
        <input type="submit" class="login pull-right" value="Register">
        <div class="clear-fix"></div>
      </div>
    </form>
  </div>
</body>
</html>