
<?php

function myFct($myAge,$myGender) {

    if ($myGender == 'Homme' && $myAge >= 18) {
        echo 'Vous êtes un homme et vous êtes majeur';
    } if ($myGender == "Homme" && $myAge <= 18) {
        echo 'Vous êtes un homme et vous êtes mineur';
    } if ($myGender == "Femme" && $myAge >= 18) {
        echo 'Vous êtes une femme et vous êtes majeure';
    } if ($myGender == 'Femme' && $myAge <= 18) {
        echo 'Vous êtes une femme et vous êtes mineur';
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercice 7</title>
</head>
<body>
<h1>Exercice 7</h1>
<p>Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :

<ul>
<li>Homme</li>
<li>Femme</li>
</ul>  

La fonction doit renvoyer en fonction des paramètres :

<ul>
<li>Vous êtes un homme et vous êtes majeur</li>
<li>Vous êtes un homme et vous êtes mineur</li>
<li>Vous êtes une femme et vous êtes majeure</li>
<li>Vous êtes une femme et vous êtes mineure</li>
</ul>   

</p>


<p><?php echo myFct(15, 'Femme') ?></p>

</body>
</html>