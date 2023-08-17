<form action="" method="get">
    <label>Qual a quantidade do latão em gramas? </label>
    <input type="number" step="any" name="latao">
    <input type="submit" name="submit">

</form>
<?php 
    if(isset($_GET['submit'])){
        $qtddlatao = $_GET['latao'];
        echo ("Quantidade de latão: " .($qtddlatao * 0.7). "<br>Quantidade de zinco: " . ($qtddlatao * 0.3));

    }
?>