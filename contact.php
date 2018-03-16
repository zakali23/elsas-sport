<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/logo.svg">

  <title>ELSAS'Sport</title>



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">-->


  <!-- Custom styles for this template -->
  <link href="css/contact.css" rel="stylesheet">
  <link href="css/header-jennifer.css" rel="stylesheet">
  <link href="css/style-footer.css" rel="stylesheet">
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
    <li><a href="accueil.php">Accueil </a></li>
    <li><a href="activites.php">Activités <span class="sr-only">(current)</span></a></li>
    <li><a href="actualites.php">Actualités</a></li>
    <li class="active"><a href="contact.php" >Contact </a>
    </li>

  </ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
<!--     __________CAROUSEL____________        -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/bird.jpg" alt="...">
      <div class="carousel-caption">
        <h1>Contactez-nous</h1>
      </div>
    </div>


  </div>
  <!-- Controls -->

          </header>
          <!-- /.carousel -->
        </br></br>
        <div class="container-fluid">
          <aside class="col-lg-6 ">
            <p>Vous avez besoin de conseils, une idée à formuler ou même une réclamation ? <br></p>
            <p>Ne soyez pas timide et envoyez-nous un message, nous nous ferons un plaisir de vous répondre !</p>
            <br></br>
            <form>
              <div class="form-group">
                <div class="form-group has-feedback has-feedback-left">
                 <input type="text" class="form-control" placeholder="Nom" />
                  <i class="glyphicon glyphicon-user form-control-feedback "></i>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                 <input type="email" class="form-control" placeholder="Email" />
                  <i class="glyphicon glyphicon-envelope form-control-feedback "></i>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                 <input type="tel" class="form-control" placeholder="Téléphone" />
                  <i class="glyphicon glyphicon-phone form-control-feedback "></i>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                 <input type="text" class="form-control" placeholder="Objet" />
                  <i class="glyphicon glyphicon-pencil form-control-feedback "></i>
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
              <h2 class="panel-title">ELSAS'SPORT</h2>
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
             <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></button>
            <?php
            include 'footer.php'; ?>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

          <script>
          window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
          </script>

          <script>
          // When the user scrolls down 20px from the top of the document, show the button
          window.onscroll = function() {scrollFunction()};

          function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                  document.getElementById("myBtn").style.display = "block";
              } else {
                  document.getElementById("myBtn").style.display = "none";
              }
          }

          // When the user clicks on the button, scroll to the top of the document
          function topFunction() {
              document.body.scrollTop = 0;
              document.documentElement.scrollTop = 0;
          }
          </script>
          <script src="js/midnight.jquery.min.js"></script>
          <script>
          $('.scrollTo').click(function() {
var getElem = $(this).attr('href');
var targetDistance = 20;
if ($(getElem).length) {
  var getOffset = $(getElem).offset().top;
  $('html,body').animate({
    scrollTop: getOffset - targetDistance
  }, 800);
}
return false;
});
          </script>



        </body>

        </html>
