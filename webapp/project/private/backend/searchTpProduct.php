<?php
    include("conexao.php");

    $query=pg_query($db, "select * from tp_produto");

    $tp_prods = [];  

    if (pg_num_rows($query) > 0) {
        while($row = pg_fetch_array($query)) {
            $arrayProducts= [
                "oid" => $row["id_tp_prod"],
                "name" => $row["tp_produto"]
            ];
            array_push($tp_prods, $arrayProducts);
        }
    }

   echo json_encode($tp_prods, JSON_FORCE_OBJECT);
?>
