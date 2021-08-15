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

      <div class="container-card__experience">
          <div class="card__experience">
            <div class="content-card__experience">
              <h3>Expériences Professionnelles :</h3>
                <p>Magasinier - CDI - (28/08/19 - 31/03/21) </p>
                <p>Ingénieur du son - Auto-entrepeneur - (02/06/20 - 01/11/20)</p>
                <p>Projet Muscial - Auto-entrepeneur - (02/09/18 - 01/06/20)</p>
                <p>Menuisier Bois - Alternance - (01/09/16 - 01/09/18) </p>
                <p>Réceptionniste d'hôtel / Serveur en restauration - Alternance - (01/09/14 - 31/08/16)</p>
            
            </div>
          </div>

          <div class="card__experience">
            <div class="content-card__experience">
              <h3>Diplômes :</h3>
              <p>OpenClassrooms - 2021 - Etude d'html, css, php, javascript, git et gitHub, sass</p>
              <p>La Machine à Mixer - 2019/2020 - Formation MIX 101, MIX Mastercass, Mastering</p>
              <p>BTP CFA de l’Hérault - 11/07/2018 - Menuisier fabricant de menuiserie, mobilier et agencement</p>
              <p>H&C conseil - 31/08/15 - Serveur en restauration option sommellerie</p>
              <p>Lycée Louis Feuillade - 01/07/14 - Baccalauréat Sciences et technologies du management et de la gestion</p>
            </div>
          </div>

         
        </div>

        <script type="text/javascript" src="../vanilla-tilt.js"></script>
        <script> 
          VanillaTilt.init(document.querySelectorAll(".card__experience"),{
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
