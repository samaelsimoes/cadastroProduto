<?php
    session_start();
    include("conexao.php");

    $login = $_GET['login'];
    $password = md5($_GET['newPassword']);
    $username = $_GET['nome'];

    $status = "";
    $mensagem = "";

    $query=pg_query($db, "select * from login where login = '$login'");
    $val = pg_fetch_all($query);

    if (!$val) {
        $sql = "INSERT INTO login (nome, login, senha) VALUES ('$username', '$login', '$password')";
        pg_query($sql);
            
        $status = "success";
        $mensagem = "Cadastro realizado com sucesso";
 
        $_SESSION['login'] = $login;
        $_SESSION['dateLogin'] = date("Y-m-d H:i:s");
    } else {
        $status = "warning";
        $mensagem = "Usuário já cadastrado!";
    }

    $parameter = [
        'status' => $status,
        'mensagem' => $mensagem,
    ];

    echo json_encode($parameter);
?>