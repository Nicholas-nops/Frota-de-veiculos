
<?php
if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['password'])) {
    $nome = $_POST['nome'];
    $email = md5($_POST['email']);
    $password = md5($_POST['password']);

    $Servidor = "localhost";    //endereço do BD
    $Usuario = "root";            //Usuário do BD
    $Senha = "";                //Senha do BD
    $banco_de_Dados = "frota_de_veiculos";    //Base de Dados

    $buscaUrl = new mysqli($Servidor, $Usuario, $Senha, $banco_de_Dados); //Conexão
    $buscaUrl->set_charset("utf8");        //Definição do charset para o BD
    $sql = "SELECT * FROM pessoas WHERE email='" . $email . "'";    //Comando
    $query = $buscaUrl->query($sql);    //Executa comando
    if ($_POST['nome'] != "" && $_POST['email'] != "" && $_POST['password'] != "") {
        if ($query) {
            if ($result = mysqli_fetch_array($query) != NULL) {
                echo "Email já cadastrado";
            } else {
                $sql = "INSERT INTO pessoas (`permissao`,`email`,`senha`,`nome`) VALUES (0,'" . $email . "','" . $password . "','" . $nome . "')";
                echo $sql;
                $query = $buscaUrl->query($sql);    //Executa comando
                echo "<script>alert('Cadastrado com sucesso!');</script>";
                header("Location: index.php?msg=sucesso");
            }
        }
    } else {
        echo "Verifique se todos os campos foram preenchidos!";
    }
}
?>
