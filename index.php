<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 4 Exercice 4</title>
    </head>
    <body>
        <?php
        //Déclarer la variable
        $first = 4;
        $second = 2;

        // Déclarer fonction avec les paramètres
        function compareNumber($number1, $number2) {
            // Si nombre 1 est supérieur au nombre 2
            if ($number1 > $number2) {
                $result = 'Le premier nombre est plus grand';
                // Si nombre 1 est inférieur au nombre 2
            } elseif ($number1 < $number2) {
                $result = 'Le premier nombre est plus petit';
                // Si nombre 1 est égal au nombre 2
            } else {
                $result = 'Les deux nombres sont identiques';
            }
            return $result;
        }

        //Appeler la fonction
        echo compareNumber($first, $second);
        ?>
    </body>
</html>
