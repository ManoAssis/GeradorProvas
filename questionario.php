<?php   include "conexao.php"; 
        include "cabecalho.php";



$query = "select * from perguntas order by rand() limit 10";
$resultado = mysqli_query($conexao,$query);
?>
    <form action="resultado.php" method="post">

<?php
while ( $linha = mysqli_fetch_array($resultado) ) 
{
?>
<div class=" row ">
<div class=" col-3 offset-4 ">
    <table class="table table-bordered" >
        <thead>
        <tr>
            <th>
                <?php echo "<p>".$linha["id"]. " - ".$linha["pergunta"]."<br><br>";?>
            </th> 
                
           
                <?php $query2 = "select * from alternativas where pergunta_id = ".$linha["id"];?>
            
        </tr>
        </thead>
<?php
    $resultado2 = mysqli_query($conexao,$query2);
    $contagem = 1;
    while ($alternativas = mysqli_fetch_array($resultado2)) {
    ?>
        <tbody class="table-group-divider ">

        <tr style = 'border: 1px solid black '>
        <td class=' bg-gradient'>
            <input type="radio" name="<?php echo $linha["id"];?>" value="<?php echo $contagem;?>" >
            <?php echo $alternativas ["alternativa"];?>
        </td>
        </tr>
        </tbody>
        
    <?php
    $contagem++;
        }
}
?>

</form>
</table>
<button type="submit" class="p-2 m-4 mx-auto">Enviar Questionario</button>
</div>
</div>
<?php include "rodape.php"?>
