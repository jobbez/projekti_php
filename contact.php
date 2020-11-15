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
    <li class="nav-item">
      <a class="nav-link" href="register/login.php">Kirjaudu</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register/logout.php" hidden>Kirjaudu ulos</a>
    </li>
  </ul>
   </div>
</nav>


<div class="container">
<form class="text-center border border-light p-5" action="contact_form.php" method="POST">
    <p class="h4 mb-4">Ota Yhteyttä</p>
    <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Nimi.." required>
    <input type="email" name="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Sähköposti.." required>
    <input type="tel" name="phone" id="defaultContactFormName" class="form-control mb-4" placeholder="Puhelinnumero.." required>
    <label>Yhteydenoton aihe</label>
    <select class="browser-default custom-select mb-4" name="subject">
        <option value="#" disabled>Valitse aihe</option>
        <option value="Kysymys tuotteista" selected>Kysymys tuotteista</option>
        <option value="Tilaus">Tilaus</option>
        <option value="Yhteydenottopyyntö">Yhteydenottopyyntö</option>
        <option value="uusi-tuote">Uuden tuotteen lisäys</option>
        <option value="Muu">Muu</option>
    </select>
    <div class="form-group">
        <textarea class="form-control rounded-0" name="message" id="exampleFormControlTextarea2" rows="3" placeholder="Viesti.." required></textarea>
    </div>
    <button class="btn btn-info btn-block" type="submit">Lähetä</button>

</form>
</div>

<footer class="page-footer font-small blue ">
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="index.php"> Pehmonen</a>
  </div>
</footer>
</body>
</html>

