<?php
include_once("Visiteur.php");
$action="index";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}
switch ($action)
{
    case "sup": Supprimer ($_GET['id']); break;
    case "mod": break;
    case "ajout": break;
}
header ('Location: Affichage.php');
?>
