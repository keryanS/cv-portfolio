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

        <div class="container-card">
          <div class="card card_orange">
            <div class="content-card">
              <h2></h2>
              <h3>Qui suis-je ?</h3>
              <p>Je m'appelle Kevin, j’ai découvert le métier de développeur grâce à des rencontres avec des professionnels qui m’ont permis d’accéder aux bases de ce métier. </br></br> Je me forme en autodidacte avec l'aide d'openclassroom et de nombreux autres tutoriels disponibles sur le web.</br></br> Demandeur de nouveautés et de conseils avisés, je suis extrêmement motivé pour apprendre, je sais être sérieux et autonome pour atteindre mes objectifs.</p>
            </div>
          </div>

          <div class="card">
            <div class="content-card">
              <h2></h2>
              <h3>Pourquoi le développement web ?</h3>
              <p>Je suis actuellement en apprentissage et j'aime ce que j'étudie, j'ai pu apercevoir les différents langages qu'il me restait à apprendre et j'ai trouvé ça passionnant.</br></br> Le métier de développeur web et en perpétuelle évolution, le besoin de formation est donc constant et c'est ce qui me plaît, on s'ennuie rarement. J'ai pu être confronté à différents problèmes mais ça a toujours été un plaisir d'en trouver les solutions.</p>
            </div>
          </div>

          <div class="card">
            <div class="content-card">
              <h2></h2>
              <h3>Informations</h3>
              <ul>
                  <li>Permis b</li>
                  <li>Disponible sur Paris et sa banlieue</li>
                </ul>
                <h4>Centres d'interets</h4>
              <ul>
                <li>Ingénierie du son, mixage et mastering</li>
                <li>Création musciale assisté par ordinateur (<a href="https://soundcloud.com/kerga">Cliquez-ici</a>)</li>
                <li>Bourse et crypto-monnaies</li>
                <li>Sports</li>
              </ul>
            </div>
          </div>
        </div>

        <script type="text/javascript" src="../vanilla-tilt.js"></script>
        <script> 
          VanillaTilt.init(document.querySelectorAll(".card"),{
		      max: 25,
		      speed: 400,
          glare: true,
          "max-glare": 1,
	        });
        </script>

        <div class="imgDoodle">
          <img src="../pictures/custom/object.png">
        </div>

        <div class="imgDoodle2">
          <img src="../pictures/custom/object2.png">
        </div>

        <?php include("../php/footer.php"); ?>

      </div>
    </section>
  </body>
</html>