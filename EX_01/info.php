<?php
    if(!$_POST){
        header('Location: index.php');
    }

    $longitud = $_POST['nom'];
    $nom = $_POST['nom'];

    echo 'La longitud del nom ' .$nom. ' és ' .strlen($longitud);
?>