<?php
    $numero = $_POST['txtnumero'];
    Antecessor e Posterior
            Antecessor e Posterior
    $cont = 0;
    while ($numero >= $divisor) {
        $cont++;
        $numero -= 5;
    }
    echo $cont;
?>
