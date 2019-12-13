<?php
$page = "Exercice 1"; // Définir la variable pour changer le titre !
include 'header.php';
$lastName = '';
$firstName = '';
if(isset($_GET['lastname'])){
    $lastName = $_GET['lastname'];
}
if(isset($_GET['firstname'])) {
    $firstName = $_GET['firstname'];
}
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 1</h2>
 <h3 class="text-center pb-5"></h3>
 <p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: </p>
 <a href="index.php?lastname=Nemare&amp;firstname=Jean">Test de la variable</a>
 <p><?= $firstName?></p>
 <p><?= $lastName?></p>
<?= include 'footer.php';?>
