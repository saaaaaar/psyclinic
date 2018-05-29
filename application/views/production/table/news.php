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
        <a class="navbar-brand js-scroll-trigger" href="<?= base_url('Core_controller'); ?>">PSYCLINIC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        </div>
      </div>
    </nav>

    <section id="listnews">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">News</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
            <?php foreach ($hasil as $rows): ?>
              <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box mt-5 mx-auto">
                <img src="<?php echo base_url('assets/upload_img/'.$rows->gambar); ?>" class="img-thumbnail">
                <h3 class="mb-3"><?php echo $rows->judul ?></h3>
                <p class="text-muted mb-0"><?php echo $rows->tanggal_post; ?></p>
                <a href="<?= base_url('C_DetailArtikel?id_post='.$rows->id_post);?>">Read More</a>
                </div> 
              </div> 
            <?php endforeach ?>
        </div>
        </div>
      </div>
    </section>

     <section id="footer">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12">
            <h6><b>Copyright &copy; Psyclinic 2017 <b></h6>
          </div>
        </div>
      </div>
    </section>

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
