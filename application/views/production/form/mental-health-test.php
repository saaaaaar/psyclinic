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
    <!-- NProgress -->
    <link href="<?php echo base_url();?>/assets/dashboard/vendors/nprogress/nprogress.css" rel="stylesheet">
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

    <section id="questioner">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 mx-auto text-center">
            <h2 class="section-heading">Mental Health Test</h2>
            <hr class="my-4">
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <?php foreach($pengunjung as $p){?>
            <form method="POST" action="<?php echo base_url('Core_controller/kuesioner/'.$p['id_penjawab'])?>">
              <?php }?>
              <table class="table table-bordered table-striped text-center">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Soal</th>
                    <th>Jawaban</th>
                  </tr> 
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Apakah anda merasa memiliki gangguan kesehatan mental?</td>
                    <td>
                      <input type="radio" name="jawaban1" value="Ya">Ya
                      <input type="radio" name="jawaban1" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Saya merasa gelisah, cemas, dan takut akan banyak hal di hidup saya</td>
                    <td>
                      <input type="radio" name="jawaban2" value="Ya">Ya
                      <input type="radio" name="jawaban2" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Saya merasa kesulitan dalam mengendalikan rasa cemas</td>
                    <td>
                      <input type="radio" name="jawaban3" value="Ya">Ya
                      <input type="radio" name="jawaban3" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Saya sering merasa lelah, panik, tegang</td>
                    <td>
                      <input type="radio" name="jawaban4" value="Ya">Ya
                      <input type="radio" name="jawaban4" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Saya memiliki kesulitan saat mencoba untuk tidur</td>
                    <td>
                      <input type="radio" name="jawaban5" value="Ya">Ya
                      <input type="radio" name="jawaban5" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Jantung saya berdegup kencang seperti berdebar hingga detak jantung meningkat</td>
                    <td>
                      <input type="radio" name="jawaban6" value="Ya">Ya
                      <input type="radio" name="jawaban6" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Saya banyak sekali berkeringat</td>
                    <td>
                      <input type="radio" name="jawaban7" value="Ya">Ya
                      <input type="radio" name="jawaban7" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Tangan, kaki, bahkan sekujur tubuh saya terasa gemetaran</td>
                    <td>
                      <input type="radio" name="jawaban8" value="Ya">Ya
                      <input type="radio" name="jawaban8" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Saya merasa kesulitan dalam bernafas dan menelan</td>
                    <td>
                      <input type="radio" name="jawaban9" value="Ya">YA
                      <input type="radio" name="jawaban9" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Saya merasakan sakit di dada hampir seperti serangan jantung</td>
                    <td>
                      <input type="radio" name="jawaban10" value="Ya">Ya
                      <input type="radio" name="jawaban10" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Saya merasakan sakit perut seperti ingin muntah atau terkena diare</td>
                    <td>
                      <input type="radio" name="jawaban11" value="Ya">Ya
                      <input type="radio" name="jawaban11" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Saya merasa pusing, kepala terasa berputar seperti ingin pingsan</td>
                    <td>
                      <input type="radio" name="jawaban12" value="Ya">Ya
                      <input type="radio" name="jawaban12" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Saya merasa sangat takut akan kehilangan kendali, menjadi gila, akan mati</td>
                    <td>
                      <input type="radio" name="jawaban13" value="Ya">YA
                      <input type="radio" name="jawaban13" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Seberapa sering anda merasa serangan panik dalam 6 bulan terakhir?</td>
                    <td>
                      <input type="radio" name="jawaban14" value="Ya">Ya
                      <input type="radio" name="jawaban14" value="Tidak">Tidak
                    </td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Apakah anda menghindari situasi/aktivitas yang membuat anda dapat mendapatkan serangan panik?</td>
                    <td>
                      <input type="radio" name="jawaban15" value="Ya">Ya
                      <input type="radio" name="jawaban15" value="Tidak">Tidak
                    </td>
                  </tr>
                </tbody>
              </table>
              <a href="<?php echo base_url('');?>"><button class="btn btn-primary btn-lg pull-left" type="button">Cancel</button></a>
              <button type="submit" class="btn btn-success btn-lg pull-right">Submit</button>
            </form>
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
