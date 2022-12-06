<?php
if (isset($_GET["id"]) && !empty($_GET["id"])) {
    include "conexao.php";
    $query = "delete from perguntas where id = " . $_GET["id"];
    $resultado = mysqli_query($conexao, $query);
    if ($resultado) {
        header("Location: perguntas.php?sucesso=Excluído com sucesso");
        exit();
    } else {
        header("Location: perguntas.php?erro=Ocorreu algum erro");
        exit();
    }
} else {
    header("Location: perguntas.php?erro=Selecione um registro para excluir");
    exit();
}
?>