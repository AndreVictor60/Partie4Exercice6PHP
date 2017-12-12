<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 4 Exercice 6</title>
  </head>
  <body>
    <?php
    $nom = 'Andre';
    $prenom = 'Victor';
    $age = 22;
    function getString($string,$string1,$int){
      $result= 'Bonjour '.$string.' '.$string1.', tu as '.$int.' ans.';
      return $result;
    }
    echo getString($nom,$prenom,$age);
    ?>
  </body>
</html>
