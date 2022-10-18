<?php
    $numero = $_POST['txtnumero'];
    Antecessor e Posterior
    Antecessor e Posterior
    $Cont = 0;
    while ($numero >= $Numero) {
        $Cont++;
        $numero -= 8;
    }
    echo $Cont;
?>
