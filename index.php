<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Tree</title>
</head>
<body>
<?php

    
function tree(){
    echo '<p class="titre">Joyeuses Fêtes🎅</p>';
    echo '<p class="yellow">*' . '</p>';
    for ($i=1; $i < 22; $i++) {
        echo '<p class="yellow">*'; 
        for ($a=0; $a < $i; $a++) { 
            echo '<span class="green">*' . '*</span>';

        }
        echo '*' . '</p>';
    }
    for ($i=0; $i < 6; $i++) { 
        echo '<p class="brown">**********</p>';        
    }
}

tree(); 
?>
</body>
</html>
