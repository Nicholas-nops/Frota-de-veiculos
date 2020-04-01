<?php
if(isset($_POST['placaVeiculo']) && isset($_POST['localProblema']) && isset($_POST['nivelUrgencia']) && isset($_POST['descricaoProblema']))
{
        $Servidor = "localhost";    //endereço do BD
        $Usuario = "root";            //Usuário do BD
        $Senha = "";                //Senha do BD
        $banco_de_Dados = "frota_de_veiculos";    //Base de Dados
        $placaveiculo = $_POST['placaVeiculo'];
        $localproblema = $_POST['localProblema'];
        $nivelurgencia = $_POST['nivelUrgencia'];
        $descricaoproblema = $_POST['descricaoProblema'];

        $buscaUrl = new mysqli($Servidor, $Usuario, $Senha, $banco_de_Dados); //Conexão
        $buscaUrl->set_charset("utf8");        //Definição do charset para o BD
        $sql = "INSERT INTO frotas (`placaveiculo`,`localproblema`,`nivelurgencia`,`descricao`,`status`) VALUES ('". $placaveiculo ."','" . $localproblema . "','" . $nivelurgencia . "','" . $descricaoproblema . "','Em andamento')";    //Comando
        $query = $buscaUrl->query($sql);
        if($query){
            if(mysqli_affected_rows($query) == 1){
                echo "Problema registrado!";
        }else{
            echo "Porfavor, verifique se todos os campos foram preenchidos";
        } 
    }
}
