<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire de contact</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body-->
    

<!--formulaire de contact-->
    <form methode="post" action="ECF_ARCADIA_formulaire_contact_traitement.php">
    <fieldset id="formulaire_contact">

        <label class="formulaire_contact_titre">
            <span style="left: 35px; top: 15px; position: absolute; text-align: center; color: black; font-size: 24px; font-family: Metamorphous; font-weight: 400; word-wrap: break-word">
                Titre: 
            </span>
            <input type="text" name="titre"/>
        </label>

        <label class="formulaire_contact_e-mail">
            <span>
                e-mail:
            </span>
            <input type="email" name="eMail"/>
        </label>

        <label class="formulaire_contact_description">
            <span>
                Description:
            </span>
            <textarea name="description"></textarea>
        </label>

        <button id="bouton_envoyer" name="envoyer" type="submit" value="envoyer">
            <img src="/code/icones/envoyer.png" alt="envoyer">
        </button>
    </fieldset>
</form>




<!--/body>
</html-->