<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body-->
    
<!--formulaire de connexion-->
<?php session_start(); ?>
    <form id="connexion" method="POST" action="ECF_ARCADIA_connexion_traitement.php">
        <legend >
            CONNEXION...
        </legend>
    
        <fieldset >

            <label class="connexion_username">
                <span>
                    Username:
                </span>
                <input name="username" type="email"/>
            </label>


           <label class="connexion_password">
                <span>
                    Password :
                </span>
                <input name="password" type="password"/>
            </label>

            
            <button id="bouton_envoyer" name="envoyer" type="submit" value="envoyer">
                <img src="/code/icones/envoyer.png" alt="envoyer">
            </button>
        </fieldset>
    </form>

<!--/body>
</html-->