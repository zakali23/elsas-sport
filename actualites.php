<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/logo.svg">

  <title>ELSAS'Sport</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->

<!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->


  <!-- Custom styles for this template -->
  <link href="css/actualite_style.css" rel="stylesheet">
  <link href="css/header-jennifer.css" rel="stylesheet">
    <link href="css/style-footer.css" rel="stylesheet">
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
  <li class="active"><a href="actualites.php">Actualités</a></li>
  <li><a href="contact.php" >Contact </a>
  </li>

</ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
  <!-- carousel -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/gym_room-2.jpg" alt="...">
        <div class="carousel-caption">
          <h2>Tenez-vous au courant...</h2>
        </div>
      </div>
      <div class="item">
        <img src="img/cycling2.jpg" alt="...">
        <div class="carousel-caption">
          <h2>...de l'actualité...</h2>
        </div>
      </div>
      <div class="item">
        <img src="img/running2.jpg" alt="...">
        <div class="carousel-caption">
          <h2>...dans votre région !</h2>
        </div>
      </div>
    </div>


    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Précédent</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Suivant</span>
    </a>
  </div>

</header>

  <!-- modal windows -->
  <div class="container">
    <h1>Les Événements</h1>
    <div class="row">
      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/StOdille1.jpg" alt="Mont Saint-Odile">
          <div class="caption">
            <h3>Trail au Mont Sainte-Odile</h3>
            <p>Mardi 4 Mars / 15 heures</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Trail au Mont Sainte-Odile</h4>
                  </div>
                  <div class="modal-body">
                    <p>
                      Nous organisons une marche rapide du côté du Mont Saint-Odile. Une bonne condition physique est requise. Toutefois, nous acceptons les gens ayant un faible niveau. Le départ est prévu à 15h30. Aussi, et pour le respect des autres participants, nous vous prions d'être présents au moins un quart d'heure avant ce dernier.
                    </p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/Foot2.jpg" alt="...">
          <div class="caption">
            <h3>Foot à la Meinau</h3>
            <p>Dimanche 17 Mars / 14h</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal1">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Foot à la Meinau</h4>
                  </div>
                  <div class="modal-body">
                    Nous organisons un match amical au stade de la Meinau. Notre groupe de 10 amis de toujours vous accueillera avec grand plaisir pour y assister. Le match est suivi d'un repas autour de tarte flambées et autres plats alsaciens.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/Esc1.jpg" alt="...">
          <div class="caption">
            <h3>Escalade Roc en Stock</h3>
            <p>Vendredi 2 Mars / 19h15</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal2">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Escalade Roc en Stock</h4>
                  </div>
                  <div class="modal-body">
                    Alpinistes chevronnés, grimpeurs experimentés, débutants ? Vous pouvez nous poser toutes vos questions en nous regardant pratiquer notre sport préféré. Rendez-vous vendredi 2 Mars à 19h15 pour une séance de grimpe à Roc en Stock !
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/muscu1.jpg" alt="...">
          <div class="caption">
            <h3>Muscu au Club du Parc</h3>
            <p>Mardi 24 Mars / 15h</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal3">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Muscu au Club du Parc</h4>
                  </div>
                  <div class="modal-body">
                    Passionnés de musculation depuis pratiquement 10 ans, vous êtes les bienvenus pour assister et participer à une séance de street-workout entre amis.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/aperun1.jpg" alt="...">
          <div class="caption">
            <h3>Apérun à l'Orangerie</h3>
            <p>Dimanche 17 Mars / 14h</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal4">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Apérun à l'Orangerie</h4>
                  </div>
                  <div class="modal-body">
                    Surmotivés pour courir avec nous et prendre un super apéritif dans la "foulée" ? Alors soyez des nôtres ce dimanche 17 mars à 14h. Rendez-vous à l'entrée du Parc de l'Orangerie à Strasbourg.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/ski1.jpg" alt="...">
          <div class="caption">
            <h3>Skating / Champ du Feu</h3>
            <p>Samedi 1 Avril / 9h30</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal5">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Skating / Champ du Feu</h4>
                  </div>
                  <div class="modal-body">
                    Vous aimez la neige ? Vous avez vu Martin Fourcade raffler médailles après médailles et avez envie de pratiquer ce sport ô combien physique ? Alors rejoignez-nous pour cette longue journée de skating à travers les paysages somptueux des Vosges.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <h1>Les petites annonces</h1>
    <div class="row">
      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/Foot1.jpg" alt="...">
          <div class="caption">
            <h3>Cherche 2 joueurs de foot</h3>
            <p>Dimanche 28 Mars / 13h30</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal9">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cherche 2 joueurs de foot</h4>
                  </div>
                  <div class="modal-body">
                    Nous cherchons 2 joueurs de foot de niveau confirmé pour participer à un match inter-cités à Strasbourg. Plus d'informations à venir.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/running1.jpg" alt="...">
          <div class="caption">
            <h3>Courir à Lingolsheim ?</h3>
            <p>Tous les jeudis</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal10">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Courir à Lingolsheim ?</h4>
                  </div>
                  <div class="modal-body">
                    Je cherche une partenaire de course avec qui silloner les routes de Lingolsheim, le tout, en s'encourageant mutuellement.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/Esc2.jpg" alt="...">
          <div class="caption">
            <h3>Cherche binôme escalade</h3>
            <p>Les Mardi et Mercredi</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal11">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cherche binôme escalade</h4>
                  </div>
                  <div class="modal-body">
                    Je suis un grimpeur confirmé et suite au départ de ma femme, je suis à la recherche de quelqu'un qui pourra m'assurer lors de la progression sur une voie. Comme je l'ai précisé dans l'annonce, je suis disponible les mardi et mercredi après-midi.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/bike1.jpg" alt="...">
          <div class="caption">
            <h3>Cherche VTTiste à Buhl</h3>
            <p>Dimanche 28 Mars / 13h30</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal12">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cherche VTTiste à Buhl</h4>
                  </div>
                  <div class="modal-body">
                    Principalement plat, le terrain de VTT autour de Buhl est destiné aux VTTistes débutants mais qui aiment le contact avec la nature. Je suis à la recherche d'un partenaire de VTT pour passer un bon moment.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/yog1.jpg" alt="...">
          <div class="caption">
            <h3>Cherche coach Yoga</h3>
            <p>Tous les jeudis</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal13">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cherche coach Yoga</h4>
                  </div>
                  <div class="modal-body">
                    Je recherche un coach de yoga pour mes prochaines séances.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="thumbnail">
          <img src="img/escalade-st-jean1.jpg" alt="...">
          <div class="caption">
            <h3>Cherche un binôme escalade</h3>
            <p>Les Mardi et Mercredi</p>
            <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal14">En savoir plus</button>

            <!-- Modal -->
            <div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Cherche un binôme escalade</h4>
                  </div>
                  <div class="modal-body">
                    Doté d'un bon niveau, je suis disponible pour assurer une personne et grimper à mon tour.
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>






  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></button>
  <?php
  include 'footer.php'; ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
</body>
</html>
