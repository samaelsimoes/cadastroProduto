<?php
    include("conexao.php");

    $descricao = $_GET['descricao'];
    $nameProd = $_GET['nameProd'];
    $tp_prod = $_GET['tp_prod'];
    $valueProd = $_GET['valueProd'];

    $status = "";
    $mensagem = "";

    $query = pg_query($db, "SELECT * FROM produto WHERE nome = '$nameProd'");
    $val = pg_fetch_all($query);

    if (!$val) {
        $sql = "INSERT INTO produto (nome, valor, id_tp_produto, descricao) VALUES ('$nameProd' , '$valueProd', '$tp_prod', '$descricao')";
        pg_query($sql);
            
        $status = "success";
        $mensagem = "Cadastro realizado com sucesso";
    } else {
        $status = "warning";
        $mensagem = "Produto já cadastrado!";
    }

    $parameter = [
        'status' => $status,
        'mensagem' => $mensagem,
    ];

    echo json_encode($parameter);
?>