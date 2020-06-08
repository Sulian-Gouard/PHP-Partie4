
<?php

function myFct($myName,$myFirstName,$MyAge)
    {
        return 'Bonjour ' . $myFirstName . $myName . ', tu as ' . $MyAge . ' ans';
    }

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercice 6</title>
</head>
<body>
<h1>Exercice 6</h1>
<p>Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
Bonjour + nom + prénom + , tu as + age + ans.
</p>


<p><?php echo myFct('Gouard ', 'Sulian ', 29) ?></p>

</body>
</html>