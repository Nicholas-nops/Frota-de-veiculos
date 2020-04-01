<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    
</body>

</html>

<?php
include 'conectadb.php';


function getVeiculos()
{
    $DB = conectaDB();
    $placa = $_POST['placa'];
    $result = $DB->query('SELECT * FROM frotas where ID=?', 's', [$placa]);
    $lines = $result->getLines();
    $html =  '<table class="table">';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Placa do veículo</th>';
    $html .= '<th>Local do problema</th>';
    $html .= '<th>Nivel de urgencia</th>';
    $html .= '<th>Status</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';
    $html .= '<td>' . $lines[0]['placaveiculo'] . '</td>';
    $html .= '<td>' . $lines[0]['localproblema'] . '</td>';
    $html .= '<td>' . $lines[0]['nivelurgencia'] . '</td>';
    $html .= '<td>' . $lines[0]['status'] . '</td>';
    $html .= '</tbody>';
    $html .=  '</table><br>';
    $html .= '<h5>Descrição do problema: </h5>';
    $html .= '<label>' . $lines[0]['descricao']  . '</label><br>';
    $html .= '<select class="form-control col-6" name="status" id="status">';
    $html .= "<option value='Em andamento'>Em andamento</option>";
    $html .= "<option value='Finalizado'>Finalizado</option>";
    $html .= '</select><br>';
    $html .=  "<input type='button' value='Atualizar status' class='attStatus btn btn-success'>";
    echo $html;
}
getVeiculos();