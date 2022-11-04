<?php
if(!$_POST){
    header('Location: index.php');
}

$Numero_Linies = $_POST['linies'];

for ($x=1; $x<=$Numero_Linies; $x++){
    echo 'Has repetit la frase ' .$x. ' vegades.';
    echo '<br>';
}

?>