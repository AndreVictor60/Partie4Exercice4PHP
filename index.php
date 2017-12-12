<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 4 Exercice 4</title>
  </head>
  <body>
    <?php
    $first = 4;
    $second = 2;
    function compareNumber($number1,$number2){
      if($number1 > $number2){
        echo 'Le premier nombre est plus grand';
      }elseif($number1 < $number2){
        echo 'Le premier nombre est plus petit';
      }else{
        echo 'Les deux nombres sont identiques';
      }
    }
    compareNumber($first,$second);
     ?>
  </body>
</html>
