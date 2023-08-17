<!-- O Garzuze me ajudou bastante nessa -->
<form action="" method="get">
    <label>Qual o valor?</label>
    <input type="number" step="any" name="dinheiro">
    <input type="submit" name="submit">


</form>
<?php
if (isset($_GET['submit'])) {
    $dinheiro = $_GET['dinheiro'];
    $valorNotas = [100, 50, 20, 10, 5, 2, 1];
    $notasUsadas = [];
    $contador = 0;

    foreach ($valorNotas as $nota) {
        if ($dinheiro < $nota) {
            continue;
        }
        $contador = 1;

        do {
            $dinheiro = $dinheiro - $nota;
            $notasUsadas[$nota] = $contador++;
        } while ($dinheiro >= $nota);
    }

    if ($contador != 1) {
        echo "Precisará de $contador notas <br>";
    } else {
        echo "Precisará de $contador nota <br>";
    }

    echo "As notas usadas foram: <br>";
    foreach ($notasUsadas as $key => $value) {
        if ($value != 1) {
            echo "$value notas de $key<br>";
        } else {
            echo "$value nota de $key<br>";
        }
    }
}

?>