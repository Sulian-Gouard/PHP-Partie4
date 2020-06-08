
<?php

function myFct($myNb1,$myNb2) {

if ($myNb1 > $myNb2) {
    return 'Le premier nombre est plus grand';
    }
if ($myNb1 < $myNb2) {
    return 'Le premier nombre est plus petit';
    }
if ($myNb1 == $myNb2) {
    return 'Les deux nombres sont identiques';
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercice 4</title>
</head>
<body>
<h1>Exercice 4</h1>
<p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
<ul>
<li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
<li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
<li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
</ul>
</p>


<p><?php echo myFct(8,3) ?></p>

</body>
</html>