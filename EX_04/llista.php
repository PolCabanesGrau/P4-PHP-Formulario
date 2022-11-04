<?php

$Nom = $_POST['nom'];
$Cognom = $_POST['cognom'];
$Contrasenya = $_POST['contrasenya'];
$Alumne = $_POST['alumne'] ?? 'Anonimo';
$Professor = $_POST['professor'] ?? 'Anonimo';
$Foto = $_POST['foto'];
$Edat = $_POST['edat'];
$Comentaris = $_POST['comentaris'];

if ($Alumne != 'Anonimo'){
    echo"El alumne $Nom $Cognom té de contrasenya: $Contrasenya i edat: $Edat anys. Comentaris: $Comentaris";
}else{
    echo"El professor $Nom $Cognom té de contrasenya: $Contrasenya i edat: $Edat anys. Comentaris: $Comentaris";
}

?>