<?php
    include("conexao.php");
    
    $query=pg_query($db, "SELECT p.id, p.nome as produto, p.valor, p.descricao, tp.tp_produto FROM produto p, tp_produto tp WHERE p.id_tp_produto = tp.id_tp_prod");
    $tp_prods= array();
    if (pg_num_rows($query) > 0) {
        while($row = pg_fetch_array($query)) {
            $arrayProducts= (object)[
                "id" => $row["id"],
                "nome_produto" => $row["produto"],
                "valor" => $row["valor"],
                "descricao" => $row["descricao"],
                "tp_produto" => $row["tp_produto"]                
            ];
            array_push($tp_prods, $arrayProducts);
        }
    }

    $object = new stdClass();
    foreach ($tp_prods as $key => $value)
    {
        $object->$key = $value;
    }
   echo json_encode($object);
?>