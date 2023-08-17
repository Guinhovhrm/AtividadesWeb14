<form action="" method="get">
    <label> Temperatura em graus Celsius: </label>
    <input type="number" step="any" name="temp">
    <input type="submit" name="submit">

</form>

<?php 
    if(isset($_GET['submit'])){
        $temperaturaC = $_GET['temp'];
        $temperaturaF = ($temperaturaC * 1.8) + 32;
        echo ("Temperatura em Graus Celsius: $temperaturaC <br>");
        echo ("Temperatura em fahrenheit: $temperaturaF");
    }
?>