<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Psyclinic - There's no Health Without Mental Health</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/homepage/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>/assets/homepage/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>/assets/homepage/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/homepage/css/artikel.css">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?= base_url(''); ?>">PSYCLINIC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
      </div>
    </nav>

    <section id="hasiltest">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 mx-auto text-center">
            <h2 class="section-heading">Hasil Simulasi Test</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12" style="padding-top: 30px;">
            <?php foreach($pengunjung as $p){?>
              <p style="text-align: center;">Berdasarkan simulasi test yang sdra/sdri <?php echo $p['nama']?> lakukan. Anda terindikasi gejala</p>
              <i><h3 style="text-align: center;"><?php echo $p['diagnosa']?></h3></i>
            <?php }?>
          </div>
        </div>
        <div align="center" style="padding-top: 20px;">
          <a href="<?php echo base_url('');?>"><button class="btn btn-primary" type="button">Back to Home</button></a>
          <a href="<?php echo base_url('Core_controller/nextpages/form/registration-test');?>"><button type="submit" class="btn btn-success">Try Again</button></a>
        </div>
      </div>
    </section>

    <footer id="footer" style="bottom: 0; position: absolute; width: 100%;">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12">
            <h6><b>Copyright &copy; Psyclinic 2017 <b></h6>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>/assets/homepage/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/homepage/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>/assets/homepage/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>/assets/homepage/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url();?>/assets/homepage/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>/assets/homepage/js/creative.js"></script>

  </body>

</html>
