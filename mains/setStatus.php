<?php

include 'conectadb.php';
$DB = conectaDB();

$placa = $_POST['placa'];
$status =$_POST['status'];
if ($status == "Finalizado") {
    $DB->query('UPDATE frotas SET status=?,horasaida=current_timestamp() where ID=?','ss',[$status,$placa]);
}else{
    $DB->query('UPDATE frotas SET status=? where ID=?','ss',[$status,$placa]);
}