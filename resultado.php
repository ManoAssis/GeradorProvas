<?php include "conexao.php";

if(isset($_POST) && !empty($_POST))
{
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    foreach ($_POST as $chave => $valor)
    {
        $respostaUsuario = $valor;
        $query = "select * from alternativas where pergunta_id = ".$chave;
        $resultado = mysqli_query($conexao, $query);
        $contagem = 1;
        while($alternativas = mysqli_fetch_array($resultado)){   
            

            if ($alternativas["correto"] == 1 ) 
            {
                if ($respostaUsuario == $contagem ){
                    echo "Parabens voce acertou";
                }
                else{
                    echo "alternativa correta";
                }
            }

            else
                {
                    if($respostaUsuario== $contagem)
                    {
                        echo "Você chutou essa:";
                    }
                }
            ?>
           
            <input type="radio"  
                name="<?php echo $alternativas["pergunta_id"];?>"
                
                value="<?php echo $contagem; ?>" >
                
                <?php echo $alternativas["alternativa"]; ?>
        
            </p>
            </table>
        <?php
        $contagem++;
        }
        echo "<br><br><br>";
    }
    
}
?>
