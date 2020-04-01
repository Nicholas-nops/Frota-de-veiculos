<?php
include_once "Database.php";

function conectaDB(){
    $DB = new MySQL('localhost', 'root', '', 'frota_de_veiculos');
    return $DB;
}

