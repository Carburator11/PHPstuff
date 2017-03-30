<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>SQL queries !</title>
 <link rel="stylesheet" href="style.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script type="text/javascript" src="script.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<br>
<div class = "form">
<form method = 'POST' action = "index_post.php" >
  <fieldset >
    <legend><h2>Add entry</h2></legend>
    Brand:
    <select name="brand">
        <option value="peugeot">peugeot</option>
        <option value="renault">renault</option>
        <option value="saab">saab</option>
        <option value="audi">audi</option>
        <option value="bmw">bmw</option>
    </select><br>
    Type: <input type = "text" name="type" value="..."/><br>
    Year: <input type = "text" name="year" value="..."/><br><br>
    Comments on this vehicule: <br>
    <textarea name="comment"></textarea><br><br>
    Price: <input type = "text" name="price" value="..."/><br><br>
    <input type = 'submit' value='add' />
  </fieldset>
</form>
</div>

<div class = "list">

  <fieldset >
    <legend><h2>Your list</h2></legend>
    <div class= "contentList">
      <ul>
<form method = 'POST' action = "index_post_delete.php" >
        <?php

    try                     {$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');}
    catch (exception $e)    {die('Erreur : ' . $e->getMessage());};
    $reply = $bdd->query('SELECT*  FROM cars WHERE ID <= 25 ORDER BY ID');
      while($data = $reply->fetch() ){

          echo
          "<div id= 'chose".$data['ID']."'>"
          ."<input class= 'deleteCheckBtn".$data['ID']."'  type= 'radio' name = 'radio' value = ".$data['ID']."    '>"
          .$data['brand']." ".$data['type']. " (". $data['year'].")"
          ."<input class = 'deleteBtn".$data['ID']."' name= 'truc' type= 'submit' value= 'delete' >"
          ."</div><br>"      ;};


        $reply->closeCursor();

      ?>



</form>


    </ul>
  </div>
</fieldset>

</div>
