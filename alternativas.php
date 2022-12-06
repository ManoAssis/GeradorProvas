<?php
include "conexao.php";
include "cabecalho.php";


if(isset($_POST) && !empty($_POST)){
    if (empty($_POST["1"]) || empty($_POST["2"]) || empty($_POST["3"]) || empty($_POST["4"]) || empty($_POST["5"])) {
        ?> 
           <div class="alert alert-danger">
           Os campos resposta não podem estar vazios
         </div>
       <?php
       }else if (empty($_POST["correto"])){
        ?> 
        <div class="alert alert-danger">
            O campo de resposta correta não pode estar vazio
        </div>
    <?php 
       }
       else{
        $alternativa1 = $_POST["1"];
        $alternativa2 = $_POST["2"];
        $alternativa3 = $_POST["3"];
        $alternativa4 = $_POST["4"];
        $alternativa5 = $_POST["5"];
        $radioCorreto = $_POST["correto"];
        $pergunta_id = $_POST["pergunta_id"];
    
        $correta1=0;
        $correta2=0;
        $correta3=0;
        $correta4=0;
        $correta5=0;
        switch ($radioCorreto) {
            case "1": $correta1=1; break;
            case "2": $correta2=1; break;
            case "3": $correta3=1; break;
            case "4": $correta4=1; break;
            case "5": $correta5=1; break;
        }
        $query = "insert into alternativas ( alternativa, pergunta_id, correto) values";
        $valores1 = "('$alternativa1', $pergunta_id, $correta1 )";
        $valores2 = "('$alternativa2', $pergunta_id, $correta2 )";
        $valores3 = "('$alternativa3', $pergunta_id, $correta3 )";
        $valores4 = "('$alternativa4', $pergunta_id, $correta4 )";
        $valores5 = "('$alternativa5', $pergunta_id, $correta5 )";

        $query = $query.$valores1.",".$valores2.",".$valores3.",".$valores4.",".$valores5;
        $resultado = mysqli_query($conexao, $query);
        
        ?>
    <div class="alert alert-success">
       Respostas registrada com sucesso
    </div>
<?php
    }
}
    if(isset($_GET["pergunta_id"]) && !empty($_GET["pergunta_id"])){
        $pergunta_id = $_GET["pergunta_id"];
        $query = "select * from perguntas where id = $pergunta_id";
        $resultado = mysqli_query($conexao, $query);
        
        $pergunta = mysqli_fetch_array($resultado)["pergunta"];

        $query = "select * from alternativas where pergunta_id = ".$pergunta_id;
        $resultado2 = mysqli_query($conexao, $query);
    }else{
        
    }
?>
    <br><br>
<div class=" mx-auto justify-content-center">
    <div class="d-flex flex-column align-items-center">
        <h1> <?php echo $pergunta; ?> </h1>
        <form action="alternativas.php?pergunta_id=<?php echo $_GET["pergunta_id"]; ?>" method ="post">
            <input type="hidden" name="pergunta_id" value="<?php echo $_GET["pergunta_id"]; ?>"/>
            <input type text name = "1"/>
            <input type ="radio" name="correto" value="1">
            <br>
            <br>
            <input type text name = "2"/>
            <input type ="radio" name="correto" value="2">
            <br>
            <br>
            <input type text name = "3"/>
            <input type ="radio" name="correto" value="3">
            <br>
            <br>
            <input type text name = "4"/>
            <input type ="radio" name="correto" value="4">
            <br>
            <br>
            <input type text name = "5"/>
            <input type ="radio" name="correto" value="5">
            <br>
            <br>
            <button type="submit" class=" align-items-center">
                Salvar
            </button>
        </form>
    </div>    
</div><br><br><br>
<?php include "rodape.php";?>