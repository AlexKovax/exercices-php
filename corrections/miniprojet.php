<?php 
//////////////////
// mini projet //
////////////////

$nbEnGras = 25;//nombre à afficher en gras dans la liste
$nbAAfficher = 50;//nombre de nombres à afficher dans la liste
?>
<!DOCTYPE html>
<html>
<head>
    <title>Mini projet</title>
</head>
<body>
    <h1>Mini projet</h2>

    <h2>La liste des nombres de 1 à 50</h2>

    <ul>
        <?php
            for($i=0;$i<=$nbAAfficher;$i++) {
                echo '<li>';
                if($i == $nbEnGras) {
                    echo '<strong>' . $i . '</strong>';
                } else {
                    echo $i;
                }
                echo '</li>';
            }
        ?>
    </ul>
</body>
</html>