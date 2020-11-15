

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="CSS/mystyle.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Noto+Sans+JP:wght@700&family=Roboto:wght@500&display=swap" rel="stylesheet">
<title>Pehmolelukauppa</title>
</head>
<body>
<div class="jumbotron" style="margin-bottom: 0px;">
<a href="index.php"><h1>Pehmonen</h1></a>
<p>Tervetuloa Suomen parhaimpaan pehmolelukauppaan!</p>
</div>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">

   <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
     <span class="navbar-toggler-icon"></span>
   </button>

   <div class="collapse navbar-collapse" id="collapse_target">

  <a class="navbar-brand"><img src="logo123.jpg"></a>
  

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="index.php">Koti</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="products.php">Tuotteet</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about.php">Tietoa</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php">Yhteydenotto</a>
    </li>
    <li class="nav-item" id="heihei">
      <a class="nav-link" href="register/login.php" >Kirjaudu</a>
    </li>
    <li class="nav-item" id="ulos">
      <a class="nav-link" href="register/logout.php" hidden>Kirjaudu ulos</a>
    </li>
  </ul>
   </div>
</nav>

<div class="etusivu">
<h1>Pehmonen</h1>
<p>Luotettava ja nopea pehmolelu nettikauppa.</p>
<p>Kaikki Suomen sisäiset tilaukset saapuvat vain muutamassa päivässä.</p>
</div>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="kuva1.jpg" class="d-block w-100" alt="kuva1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Pehmolelukauppa Pehmonen</h5>
        <p>Pehmonen tarjoaa markkinoiden parhaat pehmolelut.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="kuva2.jpg" class="d-block w-100" alt="kuva2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Tuotteita moneen makuun</h5>
        <p>Pehmosella on suuri valikoima erilaisia pehmoleluja.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="kuva3.jpg" class="d-block w-100" alt="kuva3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Jos mieluista tuotetta ei löydy</h5>
        <p>Voimme yhteydenoton avulla mahdollisesti lisätä sen valikoimaan.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 
<footer class="page-footer font-small ">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="index.php"> Pehmonen</a>
  </div>
</footer>
</body>
</html>