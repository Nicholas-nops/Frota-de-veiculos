<?php
include 'conectadb.php';
$DB = conectaDB();
$result = $DB->query("SELECT * FROM frotas WHERE status != 'finalizado'",'',[]);
$lines = $result->getLines();
for ($i=0; $i < count($lines)  ; $i++){ ?>
    <option value="<?php echo $lines[$i]['ID']; ?>"><?php echo $lines[$i]['placaveiculo'] . " - "  . 'Nivel de urgência: ' . $lines[$i]['nivelurgencia']; ?></option><?php
    echo '<br>' . '<h5>'.$lines[$i]['placaveiculo'].'</h5>';  
    echo "Selecione o problema para prosseguir";
 }
?>