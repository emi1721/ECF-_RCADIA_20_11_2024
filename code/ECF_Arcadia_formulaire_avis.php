<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire avis</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body-->
    
  <form method="post" action="ECF_ARCADIA_formulaire_avis_traitement.php">
    <fieldset id="formulaire_avis">

        <label class="formulaire_avis_pseudo">
            <span>
               Pseudo :
            </span>
              <input type="text" name="pseudo"/>
        </label>
        
        <label class="formulaire_avis_avis">
          <span>
              Avis:
          </span>
          <textarea name="avis"></textarea>
        </label>


        <button id="bouton_envoyer" name="envoyer" type="submit" value="envoyer">
          <img src="/code/icones/envoyer.png" alt="envoyer">
        </button>
    </fieldset>
  </form>




















<!--/body>
</html-->