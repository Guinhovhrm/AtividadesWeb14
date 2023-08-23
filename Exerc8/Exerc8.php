<table border=1px>
    <tr>
        <td>
            Bebida
        </td>
        <td>
            Valor (R$)
        </td>
    </tr>
    <tr>
        <td>Água</td>
        <td>R$3,00</td>
    </tr>
    <tr>
        <td>Chá</td>
        <td>R$5,00</td>
    </tr>
    <tr>
        <td>Soda Italiana</td>
        <td>R$10,00</td>
    </tr>
</table>

<form action="Exerc8Pag.php" method="post">
    <label>Bem vindo ao Instantes Frios de Prazer Refrescante (IFPR)<br></label>
    <label>O que você irá beber?</label>
    <input type="text" name="bebida">
    <br>
    <label>Quantos vai querer?</label>
    <input type="number" name="quantidade">
    <br>
    <input type="submit" name="submit">
</form>