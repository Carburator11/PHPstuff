<?php



try                   {$bdd2 = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');}
catch (exception $e)  {die('Erreur : ' . $e->getMessage());};

$req = $bdd2->prepare('INSERT INTO cars(brand, type, year, comment, price) VALUES(:brand, :type, :year, :comment, :price)');
$req -> execute(array(
    'brand'  => htmlspecialchars($_POST['brand']),
    'type'   => htmlspecialchars($_POST['type']),
    'year'   => htmlspecialchars($_POST['year']),
    'comment'=> htmlspecialchars($_POST['comment']),
    'price'  => htmlspecialchars($_POST['price'])));

$req->closeCursor();

header('Location: index.php');
?>
