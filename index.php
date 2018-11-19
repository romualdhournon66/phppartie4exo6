<?php
//Déclaration de mes variables
$firstName = 'Romuald';
$lastName = 'Hournon';
$age = 45;

//déclaration de la fonction
function myFunction($param1, $param2, $param3) {
    $returnConcat = 'Bonjour ' . $param1 . ' ' . $param2 . ' , tu as ' . $param3 . ' ans<br />';
    return $returnConcat;
}
?>
<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 4 exercice 6</title>
    </head>
    <body>
        <div align="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 4 exercice 6</h1>
                    </div>
                </div>
                <div align="center">
                    <p class="text">Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne.
                        Elle doit renvoyer une chaine de la forme :</p>
                    <p class="text">"Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>
                </div>
                <?= myFunction($firstName, $lastName, $age); ?>
            </div>
        </div>
    </body>
</html>


