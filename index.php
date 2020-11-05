<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Landing Page - Start Bootstrap Theme</title>

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
      <a class="navbar-brand" href="#">Music Plagiarism</a>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h1 class="mb-5">Build a landing page for your business or project and generate more leads!</h1>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
        </div>
      </div>
    </div>
  </header>

   <!-- Icons Grid -->
   <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
      <div class="container">

      <script type="text/javascript" src="./js/upload.js"></script>

      <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>


        <div class="file-upload" >
        <form action="upload.php" method="post" enctype="multipart/form-data">

          <button id="btAggiungi" class="file-upload-btn-add" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Aggiungi Spartito</button>
          <div class="image-upload-wrap">
            <input class="file-upload-input" type='file' onchange="readURL(this);" accept=".mid,.mxl" multiple name="fileToUpload[]" />
            <div class="drag-text">
              <h3>Drag and drop a file or select add Image</h3>
            </div>
          </div>
          <div class="file-upload-content">
            <img  src="https://lh3.googleusercontent.com/proxy/rFpvawxkAllko5Vbm640J4G8r2-hjJ2pgQAtZK6ZNTxGxL47coahmWKe39tyKJlZQvH4bm9g8Ea-FvKKGr9vVyTRlRTDC6cOVv-U" alt="your image" width="100" height="100"/>
            <div class="image-title-wrap">
              <button type="button" onclick="removeUpload()" class="remove-image">1 <span class="file-title">Uploaded Image</span></button>
              <button type="button" onclick="removeUpload()" class="remove-image">2 <span class="file-title2">Uploaded Image</span></button>
            </div>
            <button class="file-upload-btn" type="button" onclick="removeUpload()">Elimina Spartiti</button>
         </div>
         <input type="submit" value="Upload Image" name="submit">
        </form>
      </div>

      
      </div>
      </div>
    </div>
  </section>


  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/piano.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Nuova Rappresentazione</h2>
          <p class="lead mb-0">Conversione della musica in un nuovo formato.</p>
          <p class="lead mb-0">Una nuova metrica che sintetizza tutte le caratteristiche dello spartito.</p>

        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/code.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Correlazione</h2>
          <p class="lead mb-0">Tecniche di Text Similarity. </p>
          <p class="lead mb-0">Matching delle similarità tra brani.</p>

        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/cluster.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Machine Learning</h2>
          <p class="lead mb-0">Embedding della nuova Rappresentazione</p>
          <p class="lead mb-0">Clustering  per affinamento della Correlazione</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Chi siamo</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/alfonso.jpg" alt="">
            <h5>Alfonso Del Gaizo</h5>
            <i class="icon-trophy m-auto text-primary"></i>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/logoInformatica.png" alt="">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/rosa1.jpg" alt="">
            <h5>Rosa Ferraioli</h5>
            <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

   <!-- Icons Grid -->
   <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-trophy m-auto text-primary"></i>
            </div>
            <h3>Fully Responsive</h3>
            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Bootstrap 4 Ready</h3>
            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
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
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
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
