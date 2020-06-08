
<?php

function myFct($myStr,$myNum)
    {
        return $myStr . $myNum;
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercice 5</title>
</head>
<body>
<h1>Exercice 5</h1>
<p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
</p>


<p><?php echo myFct('On ne peut pas prendre de pause à ', 10) ?></p>

</body>
</html>