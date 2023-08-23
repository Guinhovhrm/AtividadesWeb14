<?php
if (isset($_POST['submit'])) {
    $bebida = strtolower($_POST['bebida']);
    $quantidade = (int)$_POST['quantidade'];
    $valorTotal = 0;
    $valorPago = 0;
    if ($bebida == 'água' or $bebida == 'chá' or $bebida == 'soda italiana') {
        switch ($bebida) {
            case 'água':
                $valor = $quantidade * 3;
            case 'chá':
                $valor = $quantidade * 5;
            case 'soda italiana':
                $valor = $quantidade * 10;
        }
        // $valorTotal = $valorAgua + $valorCha + $valorSoda;

        echo ("O valor a ser pago é: $valorTotal");
        echo '<form action="" method="post">
            <label>Digite o valor pago</label>
            <input type="number" name="pago">
            <input type="submit" name="submit2">
            </form>';
        if (isset($_POST['submit2'])) {
            if ($valorPago > $valor) {
                $valorPago = $_POST['pago'];
                $troco = $valorTotal - $valorPago;
                echo ("Sobrou $troco reais de troco");
            } else {
                echo ("O valor pago é menor que o total, SAFADO!");
            }
        }
    }
}
