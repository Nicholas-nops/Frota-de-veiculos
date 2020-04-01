<?php
if (isset($_POST['placaVeiculo']) && isset($_POST['localProblema']) && isset($_POST['nivelUrgencia']) && isset($_POST['descricaoProblema'])) {
    $Servidor = "localhost";    //endereço do BD
    $Usuario = "root";            //Usuário do BD
    $Senha = "";                //Senha do BD
    $banco_de_Dados = "frota_de_veiculos";    //Base de Dados
    $placaveiculo = $_POST['placaVeiculo'];
    $localproblema = $_POST['localProblema'];
    $nivelurgencia = $_POST['nivelUrgencia'];
    $descricaoproblema = $_POST['descricaoProblema'];
    $nome = $_SESSION['nome'];


    $buscaUrl = new mysqli($Servidor, $Usuario, $Senha, $banco_de_Dados); //Conexão
    $buscaUrl->set_charset("utf8");        //Definição do charset para o BD
    if ($placaveiculo != "" && $localproblema != ""  && $nivelurgencia != ""  && $descricaoproblema != "") {
        $sql = "INSERT INTO frotas (`nome`,`placaveiculo`,`localproblema`,`nivelurgencia`,`descricao`,`status`) VALUES ('" . $nome . "','" . $placaveiculo . "','" . $localproblema . "','" . $nivelurgencia . "','" . $descricaoproblema . "','Em aberto')";    //Comando
        $query = $buscaUrl->query($sql);
        if ($query) {
            if (mysqli_affected_rows($buscaUrl) == 1) {
                echo "Problema registrado!<br><br>";
            } else {
                echo "<h1>Porfavor, verifique se todos os campos foram preenchidos</h1>";
            }
        }
    }else{
        echo "Verifique se todos os campos foram preenchidos corretamente";
    }
}
