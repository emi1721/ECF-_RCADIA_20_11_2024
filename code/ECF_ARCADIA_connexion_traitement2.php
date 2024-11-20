<?php
 session_start();
 if (isset ($_POST["username"])){
     $_SESSION["username"]= $_POST["username"];
 }



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