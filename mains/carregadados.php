<?php
$Servidor = "localhost";    //endereço do BD
$Usuario = "root";            //Usuário do BD
$Senha = "";                //Senha do BD
$banco_de_Dados = "frota_de_veiculos";    //Base de Dados

$buscaUrl = new mysqli($Servidor, $Usuario, $Senha, $banco_de_Dados);
$sql = "SELECT * FROM frotas WHERE nome='" . $_SESSION['nome'] . "'";
$query = $buscaUrl->query($sql);    //Executa comando
if ($query) {
    while ($frotas = mysqli_fetch_array($query)) {
        ?>
        <div class="form-group">
            <textarea class="form-control" name="descricaoProblema" id="exampleFormControlTextarea1" rows="12" style="max-height: 200px;" disabled>
        <?php
                echo "Nome do relator: " . $frotas['nome'] . "\n" . "Placa do veículo: " . $frotas['placaveiculo'] . "\n" .
                    "Local do problema: " . $frotas['localproblema'] . "\n" . "Nivel de urgência: " . $frotas['nivelurgencia'] . "\n" .
                    "Descrição: " . $frotas['descricao'] . "\n" . "Horario em que foi solicitado: " . $frotas['hora'] . "\n" .
                    "Horario em que foi resolvido: " . $frotas['horasaida'] . "\n" . "Status do pedido: " . $frotas['status'] ;
                ?>
    </textarea>
        </div>
<?php
    }
}





?>