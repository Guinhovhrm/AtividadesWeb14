<!-- Me baseei na ajuda q o professor deu pra Nath :D -->
<form action="" method="get">
    <label>Qual a quantidade de selos?</label>
    <input type="number" name="selos">
    <input type="submit" name= "submit">
</form>

<?php 
    if (isset($_GET['submit'])) {
        $selos = $_GET['selos'];
        $numPrimo = true;
        $div = $selos/2;
        for ($div; $div >= 2 AND $numPrimo == true; $div--){
            
            if($selos % $div == 0){
                $numPrimo = false;
            }else{
                $numPrimo = true;
            }
        }
        if($numPrimo == false){
            echo ("É possível fazer um retângulo com $selos selos");
        }else{
            echo ("Não é possível fazer um retângulo com $selos selos");
        }

    }
?>
