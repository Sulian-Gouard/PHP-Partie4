
<?php

    function myFct($myStr,$mySecStr)
    {
        return $myStr . $mySecStr;
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exercice 3</h1>
    <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines.</p>


<p><?php echo myFct('Première partie,',' seconde partie') ?></p>

</body>
</html>