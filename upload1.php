<?php

$length=count($_FILES["fileToUpload"]["name"]);

for ($i =0; $i <= $length-1; $i++) {
    $nomefile=$_FILES ['fileToUpload']['name'][$i];
    move_uploaded_file ($_FILES ['fileToUpload']['tmp_name'][$i], 'Parts/'.$nomefile);
  }

$comando='python musicParser3.py';
exec($comando, $out, $status);


$comando2='python main.py';
exec($comando2, $out2, $status2);

$cosinedistance = (float)$out2[0];

$cosinedistance = $cosinedistance * 100;
$cosinedistance = (int)$cosinedistance;

$plagio = $out2[1];


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MusicPlagiarismTool</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/upload.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">ciao</a>
    </div>
  </nav>


  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <?php 

        if($plagio == "TRUE"){

          echo("<h2 class=\"mb-5\">PLAGIO</h2>");
          echo("<h2 class=\"mb-5\">$cosinedistance%</h2>");

        }
        if($plagio == "TRUEC"){

          echo("<h2 class=\"mb-5\">PLAGIO</h2>");  
          echo("<h2 class=\"mb-5\">$cosinedistance%</h2>");
        }
        if($plagio == "FALSEC"){

          echo("<h2 class=\"mb-5\">NO PLAGIO</h2>"); 
          echo("<h2 class=\"mb-5\">$cosinedistance%</h2>");
        }
        if($plagio == "FALSE"){

          echo("<h2 class=\"mb-5\">NO PLAGIO</h2>");     
          echo("<h2 class=\"mb-5\">$cosinedistance%</h2>");
        }

      ?>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <h1>90%</h1>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <?php
             if($plagio == "TRUE"){

              echo("<img class=\"img-fluid rounded-circle mb-3\" src=\"img/verde.jpg\" alt=\"\">");
             }
             if($plagio == "TRUEC"){

              echo("<img class=\"img-fluid rounded-circle mb-3\" src=\"img/giallo.png\" alt=\"\">");
             }
             if($plagio == "FALSEC"){

              echo("<img class=\"img-fluid rounded-circle mb-3\" src=\"img/rosso.png\" alt=\"\">");
             }
             if($plagio == "FALSE"){

              echo("<img class=\"img-fluid rounded-circle mb-3\" src=\"img/rosso.png\" alt=\"\">");
             }
          ?>
          <!--  <img class="img-fluid rounded-circle mb-3" src="img/verde.jpg" alt=""> -->
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <h5>Rosa Ferraioli</h5>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <p class="text-muted small mb-4 mb-lg-0">&copy; Alfonso Del Gaizo - Rosa Ferraioli. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fa fa-git-square"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="https://github.com/ferr26/toolMusicPlagiarism">
                <i class="fab fa-github  fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.unisa.it/">
                <i class="fa fa-university fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
