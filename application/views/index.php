<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Psyclinic - There's no Health Without Mental Health</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/homepage/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url('assets/homepage/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url('assets/homepage/vendor/magnific-popup/magnific-popup.css');?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/homepage/css/creative.css');?>">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PSYCLINIC</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#questioner">Test</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#news">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url('Core_controller/nextpages/luar/login'); ?>">Log In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto"></div>
    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 mx-auto text-center">
            <h2 class="section-heading text-white">About</h2>
            <hr class="light my-4">
          </div>
        </div>
        <div class="row text-center">
          <div class="col-sm-6" align="center">
              <p class="text-white mb-4">Kesehatan mental merupakan bagian penting dalam kehidupan kita dan masyarakat. Sangat disayangkan, mayoritas masyarakat Indonesia masih kurang peduli dengan masalah kesahatan mental. Dibangun pada akhir tahun 2017 oleh tim pengembang, PSYCLINIC hadir dari keprihatinan tim akan rendahnya tingkat kepedulian masyarakat terhadap kesehatan mental.</p>
            </div>
          <div class="col-sm-6" align="center">
              <p class="text-white mb-4">PSYCLINIC adalah aplikasi web berupa sistem informasi manajemen puskesmas/klinik jiwa. Aplikasi ini akan dapat membantu perkembangan sistem klinik jiwa di seluruh Indonesia dengan menghadirkan fitur penyimpanan data pasien, psikiater, dan perawat; fitur kuesioner sebagai konseling awal kesehatan mental; juga fitur berita terkini mengenai kesehatan mental.</p>
            </div>
        </div>
      </div>
    </section>

    <section id="questioner">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 mx-auto text-center">
            <h2 class="section-heading">Mental Health Test</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="row text-center">
          <div class="col-lg-12">
<<<<<<< HEAD
            <p>Banyak dari kita ragu akan kesehatan mental yang kita miliki. <br>
=======
          <p>Banyak dari kita ragu akan kesehatan mental yang kita miliki. <br>
>>>>>>> 104bea479c3b47bc7f152a86ea5151b99db8b7db
            Penasaran? Cari tahu kemungkinan penyakit gangguan mental yang anda miliki dengan mengisi kuesioner online sebagai tahap konseling awal hanya di PSYCLINIC!</p>
            <h5><a href="<?php echo base_url('Core_controller/nextpages/form/registration-test');?>">[Klik Untuk Memulai Test]</a></h5>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-primary" id="news">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-white">News</h2>
            <hr class="light my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
            <?php foreach ($data as $rows): ?>
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
    <div class="row text-center">
      <div class="col-lg-12">
        <br><a class="btn btn-outline-primary" href="<?= base_url('C_ListArtikel?id_post='.$rows->id_post);?>">Read More News</a></br>
      </div>
    </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters text-center">
          <div class="col-lg-12">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

    <div class="carousel-inner text-center">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo base_url('assets/homepage/img/happiness1.jpg') ?>" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url('assets/homepage/img/happiness2.jpg')?>" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo base_url('assets/homepage/img/happiness3.jpg')?>" alt="Third slide">
      </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
      </a>
    </div>
      </div>
      </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contact Us</h2>
            <hr class="my-4">
            <p class="mb-5">Silahkan konsultasikan masalah Anda pada kami</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>123-456-XXXX</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">mesosfer@gmail.com</a>
            </p>
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
