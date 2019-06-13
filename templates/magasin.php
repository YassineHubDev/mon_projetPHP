<?php require 'inc/header.php';

    use src\Controller\MagasinController;



//On récupère notre contrôleur
$controller = new MagasinController();
//On récupère les données de l'index
$datas = $controller->magasin();
//On extrait les données pour pouvoir les utiliser en tant que variables
extract($datas);
?>

<h1>Bonjour magasin</h1>










<? require 'inc/footer.php' ?>
