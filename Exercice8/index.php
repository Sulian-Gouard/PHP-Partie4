
<?php

function myFct($myFirstNum = 0,$myScdNum = 0,$myThrdNum = 0) {

    return $myFirstNum + $myScdNum + $myThrdNum;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercice 8</title>
</head>

<body>
<h1>Exercice 8</h1>
<p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
Tous les paramètres doivent avoir une valeur par défaut.</p>


<p><?php echo myFct(10, 20, 30) ?></p>

</body>

</html>