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

      <div class="container-card__contact">
          <div class="card__contact">
            <div class="content-card__contact">
            <div class="section-contact__container">  
          <form class="section-contact__container-formulaire" action="../php/sendEmail.php" method="post">
            <h3>Merci de prendre le temps de me contacter</h3>
            <h4>Laissez moi un message et j'y répondrai le plus rapidement possible :</h4>
              <fieldset>
                <input class="section-contact__container-formulaire-name" name='nom' placeholder="Nom" type="text" tabindex="1" required autofocus>
              </fieldset>
              <fieldset>
                <input class="section-contact__container-formulaire-email" name='email' placeholder="Email" type="email" tabindex="2" required>
              </fieldset>
              <fieldset>
                <textarea class="section-contact__container-formulaire-message" name='message' placeholder="Php en cours d'apprentisage, envoie de formulaire disponible prochainement." tabindex="3" required></textarea>
              </fieldset>
              <fieldset>
                <button id="contact-submit" name="submit" type="submit" data-submit="...Sending">Envoyer votre message</button>
              </fieldset>
          </form>
         </div>
                
            
            </div>
          </div>
        </div>

        <?php include("../php/footer.php"); ?>

      </div>
    </section>
  </body>
</html>