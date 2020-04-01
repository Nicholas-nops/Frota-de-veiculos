<?php
    if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
        if (isset($_POST['email']) &&  isset($_POST['password'])) {

            if($_POST['password'] == "" || $_POST['email'] == "")
            {
                echo "Preencha os campos para prosseguir";
            }
            else
            {
                $email = md5($_POST['email']);
                $password = md5($_POST['password']);
                //$nome = $_POST['nome'];
                $Servidor = "localhost";    //endereço do BD
                $Usuario = "root";            //Usuário do BD
                $Senha = "";                //Senha do BD
                $banco_de_Dados = "frota_de_veiculos";    //Base de Dados

                $buscaUrl = new mysqli($Servidor, $Usuario, $Senha, $banco_de_Dados); //Conexão
                $buscaUrl->set_charset("utf8");        //Definição do charset para o BD
                $sql = "SELECT * FROM pessoas WHERE email='" . $email . "' AND senha='" . $password . "'";    //Comando
                $query = $buscaUrl->query($sql);    //Executa comando

                if ($query)
                {
                    if ($result = mysqli_fetch_array($query)) {
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
                        $_SESSION['permissao'] = $result['permissao'];
                        $_SESSION['nome'] = $result['nome'];
                        header("location: home.php");
                    }
                    else
                    {
                        echo "email ou senha errado(s)";
                    }
                }else{
                    echo "Preencha os campos para realizar o login";
                }
            }
        }
    } else {
        header("location: home.php");
        session_destroy();
    }




?>