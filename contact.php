<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="css/contact.css" rel="stylesheet">
    <link href="css/style-footer.css" rel="stylesheet">
    <link href="css/header-jennifer.css" rel="stylesheet">
</head>

<body>
<header>
  <nav class="navbar navbar-default">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
</button>
<div><a  href="#">
  <img src="img/logo-blanc.png" alt="logo" height="50" width="auto" />
</a>
</div>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav navbar-right">
  <li><a href="index.php">Accueil </a></li>
  <li><a href="activites.php">Activités <span class="sr-only">(current)</span></a></li>
  <li><a href="actualites.php">Actualités</a></li>
  <li class="active"><a href="contact.php" >Contact </a>
  </li>

</ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

</header>
  <div class="container-fluid">
    <div id="carousel" class="container-fluid carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/write.jpg" alt="Pen">
          <h1 class="carousel-caption">Contactez-nous</h1>
        </div>
      </div>
    </div>
  </br></br>
    <div class="container-fluid">
      <aside class="col-lg-6 ">
        <p>Vous avez besoin de conseils, une idée à formuler ou même une réclamation ? <br></p>
        <p>Ne soyez pas timide et envoyez-nous un message, nous nous ferons un plaisir de vous répondre ! Promis: on ne mord pas !</p>
        <br></br>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="objet" placeholder="Objet">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="nom" placeholder="Votre nom">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Votre adresse e-mail">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="Votre message"></textarea>
          </div>
          <button type="submit" class="btn btn-default">Envoyer</button>
        </form>
      </br>
      </aside>
    </br>
      <aside class="col-lg-6">
        <address class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">ELSAS'SPORT</h4>
          </div>
          <div class="panel-body">
            <span class="glyphicon glyphicon-home"></span> 1 rue des Corps de Garde<br>
            67000 Strasbourg<br>
            <span class="glyphicon glyphicon-earphone"></span><a href="tel:+33658705399"> +33 6 58 70 53 99</a><br>
            <span class="glyphicon glyphicon-envelope"></span><a href="mailto:elsassport@gmail.com"> elsassport@gmail.com</a>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2640.708686963793!2d7.766078115937002!3d48.55797397925915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c96d34025333%3A0x4fefbe61ce54f79a!2sWild+Code+School+-+Formation+d%C3%A9veloppeur+web!5e0!3m2!1sfr!2sfr!4v1520435727078"></iframe>
          </address>
        </div>
      </div>
    </aside>
  </div>
  <br>
  <?php include "footer.php"; ?>
</body>
</html>
