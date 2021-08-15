<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../sass/css/style.css"
</head>

<body>
    <section>
      <div class="container">

      <?php include("../php/header.php"); ?>

      <div class="container-card__portfolio">
          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a href="../portfolio-projects/project1-integration-scholarme/index.html">
                <figure>
                  <img class="img-integration" src="../pictures/project1-integration-scholarme.png">
                    <figcaption>ScholarMe</figcaption>
                </figure>
              </a>
            </div>
          </div>

          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a href="../portfolio-projects/project2-integration-card/index.html">
                <figure>
                  <img class="img-integration" src="../pictures/project2-integration-card.png">
                    <figcaption>Uni</figcaption>
                </figure>
              </a>
            </div>
          </div>

          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a class="lien-projet-javascript" href="../portfolio-projects/project3-btnmenu/index.html">
                <figure>
                  <img class="img-javascript" src="../pictures/project3-btnmenu.png">
                    <figcaption>Menu latéral</figcaption>
                </figure>
              </a>
            </div>
          </div>

          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a href="../portfolio-projects/project4-notification/index.html">
                <figure>
                  <img class="img-javascript" src="../pictures/project4-notification.png">
                    <figcaption>Notifications</figcaption>
                </figure>
              </a>
            </div>
          </div>

          <div class="card__portfolio">
            <div class="content-card__portfolio">
              <a href="../portfolio-projects/project5-darkmode/index.html">
                <figure>
                  <img class="img-javascript" src="../pictures/project5-darkmode.png">
                    <figcaption>Dark mode</figcaption>
                </figure>
              </a>
            </div>
          </div>

        </div>

        <script type="text/javascript" src="../vanilla-tilt.js"></script>
        <script> 
          VanillaTilt.init(document.querySelectorAll(".card__portfolio"),{
		      max: 25,
		      speed: 400,
          glare: true,
          "max-glare": 1,
	        });
        </script>
               

        <?php include("../php/footer.php"); ?>

      </div>
    </section>
  </body>
</html>