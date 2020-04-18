<?php 
    session_start();
    include("conexao.php");

    $login = $_GET['login'];
    $password = md5($_GET['password']);
    try {
        $query=pg_query($db, "SELECT * FROM login WHERE login = '$login'AND senha= '$password'");
        $val = pg_fetch_all($query);
        $status = "";
        $mensagem = "";
       
    
        if ($val) {
            $status = "success";
            $mensagem = "Login realizado com sucesso";

            $_SESSION['login'] = $login;
            $_SESSION['dateLogin'] = date("Y-m-d H:i:s");
        } else {
            $status = "warning";
            $mensagem = "Login inválido";
        }
         
        $parameter = [
            'status' => $status,
            'mensagem' => $mensagem,
        ];
    
        echo json_encode($parameter);
    } catch (\Throwable $th) {
        $parameter = [
            'status' => "error",
            'mensagem' => "$th",
        ];
    }
    
?>