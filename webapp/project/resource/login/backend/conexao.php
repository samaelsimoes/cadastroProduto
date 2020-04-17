<?php
  $db = pg_connect("host=localhost port=5432 dbname=produtos user=postgres password=12345") or die('connection failed');

  if(!$db) {
    die("Não foi possível se conectar ao banco de dados.");
  }
?>