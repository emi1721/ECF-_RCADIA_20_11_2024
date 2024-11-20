<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>ECF Arcadia Accueil</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
<style>
  
  </style>
  
</head>

<body>

<?php
$page = $_GET['page'];

require_once "ECF_Arcadia_header.php";

/*if ($page == '') {
    $page = 'accueil';
}
require_once "ECF_Arcadia_$page.php";*/

switch($page) {
    case 'connexion':
        require_once "ECF_Arcadia_connexion.php";
        break;
    case 'fiche_habitat_type':
        require_once "ECF_Arcadia_fiche_habitat_type.php";
        break;
    case 'vue_globale_habitats':
        require_once "ECF_Arcadia_vue_globale_habitats.php";
        break;
    default:
        require_once "ECF_Arcadia_accueil.php";
}


require_once "ECF_Arcadia_footer.php";


?>

</body>
</html>