<?php

try                   {$bdd3 = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');}
catch (exception $e)  {die('Erreur : ' . $e->getMessage());};

$req3 = $bdd3->prepare('DELETE FROM cars WHERE ID = :ID');
$req3 -> execute(array(':ID'=> htmlspecialchars($_POST['radio']) ));

$req3->closeCursor();





header('Location: index.php');

 ?>
