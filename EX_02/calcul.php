<?php
if(!$_POST){
    header('Location: index.php');
}

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$resultat = $num1 * $num2;

echo 'El resultat de la multiplicació entre ' .$num1. ' i ' .$num2. ' és ' .$resultat;
?>