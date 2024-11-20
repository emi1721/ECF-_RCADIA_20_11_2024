<?php
    session_start();
    if (isset ($_POST["username"]["password"])){
        $_SESSION["username"]= $_POST["username"];
        $_SESSION["password"]= $_POST["password"];
    }


    $username=$_POST["username"];
    $password=$_POST["password"];
    


   /* if($username + $password === $admin){
        echo "Bienvenu, " .$username. " sur l'espace Administrateur d'Arcadia.";
    }
    elseif($username + $password === $veterinaire){
        echo "Bienvenu, " .$username. " sur l'espace Vétérinaire d'Arcadia.";
        }
    elseif($username + $password === $employe){
        echo "Bienvenu, " .$username. " sur l'espace Employé d'Arcadia.";
        }
    else{
        echo "Vous êtes visiteur.</br>";
        echo "Bonne visite d'Arcadia.</br>";
        echo "<a href=/ECF_Arcadia_accueil.php >Cliquer ici pour revenir à l'Accueil.</a>";
    }*/
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>variables de session</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
if (isset($_SESSION["username"])){
    echo "Bienvenue ".$_SESSION["username"];
}
else {
    echo "Vous n'êtes pas connecté.";
}
?>

</body>
</html>