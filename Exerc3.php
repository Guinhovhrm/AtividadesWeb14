<form action="" method="post">
    <label> Digite seu peso em kg: </label>
    <input type="number" step="any" name="peso">
    <label> Digite sua altura em metros:</label>
    <input type="number" step="any" name="altura">

    <input type="submit" name="submit">

</form>

<?php
if (isset($_POST['submit'])) {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $altura = pow($altura, 2);
    $imc = round($peso / $altura, 2);
    echo $imc . "<br>";
    echo ("<b> IMC  $imc </b><br>");

    if ($imc <= 18.5) {
        echo ("Abaixo do peso");
    } elseif ($imc >= 18.6 && $imc <= 24.9) {
        echo ("Peso ideal");
    } elseif ($imc >= 25 && $imc <= 29.9) {
        echo ("Levemente acima do peso");
    } elseif ($imc >= 30 && $imc <= 34.9) {
        echo ("Obesidade grau I");
    } elseif ($imc >= 35 && $imc <= 39.9) {
        echo ("Obesidade grau II");
    } else {
        echo ("Obesidade grau III");
    }
}
?>