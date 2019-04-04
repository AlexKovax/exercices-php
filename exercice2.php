<?php
/////////////////
// Exercice 2 //
///////////////

//Todo : remplacez les XX par les bonnes valeurs en fonction des indications et du rendu prévu exercice2.html

//initialisation des variables
$jour = XX;
$langageAppris = "PHP";//valeur booléene décrivant si vous apprenez ou non le langage PHP

?>
<!DOCTYPE html>
<html>
<head>
    <title>Exercice 2</title>
</head>

<body>

    <h1>Bonjour le monde!</h1>

    <ul>
        <li>Aujourd'hui, nous sommes <?php echo $jour;?></li>
        <?php if(XX) { 
            echo "<li>nous n'apprenons pas le langage PHP</li>";
        } else {
            echo "<li>nous apprenons le langage PHP</li>";
        }
        ?>
        <li>
            Nous savons aussi compter jusqu'à 5 dans ce langage. La preuve : <?php for($i=XX;$i<XX;$i++) { echo XX; }?> !
        </li>
    </ul>

</body>

</html>