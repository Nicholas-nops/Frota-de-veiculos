<?php
$Servidor = "localhost";    //endereço do BD
$Usuario = "root";            //Usuário do BD
$Senha = "";                //Senha do BD
$banco_de_Dados = "frota_de_veiculos";    //Base de Dados


$buscaUrl = new mysqli($Servidor, $Usuario, $Senha, $banco_de_Dados); //Conexão
$buscaUrl->set_charset("utf8");        //Definição do charset para o BD
$sql = "SELECT * FROM tempo_medio" ;    //Comando
$query = $buscaUrl->query($sql);
if($query)
{
    $minutos = $query->fetch_assoc()['MINUTOS'];

    echo number_format($minutos,2)." Minutos";
}





?>