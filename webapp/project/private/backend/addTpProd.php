<?php 
    include("conexao.php");

    $tp_prod = $_GET["tp_produto"];
    $status = "";
    $mensagem = "";

    $query=pg_query($db, "select * from tp_produto where tp_produto = '$tp_prod'");
    $val = pg_fetch_all($query);

    if (!$val) {
        $sql = "INSERT INTO tp_produto (tp_produto) VALUES ('$tp_prod')";
        pg_query($sql);
            
        $status = "success";
        $mensagem = "Cadastro realizado com sucesso";
    } else {
        $status = "warning";
        $mensagem = "Tipo de produto já cadastrado!";
    }

    $parameter = [
        'status' => $status,
        'mensagem' => $mensagem,
    ];

    echo json_encode($parameter);
?>