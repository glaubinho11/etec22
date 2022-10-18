<?php
    $numero = $_POST['txtnumero'];
    $divisor = $_POST['txtdivisor'];
    $cont = 0;
    while ($numero >= $divisor) {
        $cont++;
        $numero -= 5;
    }
    echo $cont;
?>