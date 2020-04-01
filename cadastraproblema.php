<?php
session_start();
if(isset($_SESSION['permissao'])){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function back() {
            location.href = "index.php"
        }
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/stylepagini.css">
    <title>Pagina inicial</title>
</head>

<body>
    <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home.php">Inicio</a>
        </nav>
    </div>
    <div class="container pt-5">
        <form method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Placa do veículo :</label>
                <input type="text" class="form-control" id="placaVeiculo" name="placaVeiculo" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Local do problema :</label>
                <input type="text" class="form-control" name="localProblema" id="localProblema" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Nivel de urgência :</label required>
                <select class="form-control" name="nivelUrgencia" id="">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição do problema</label required>
                <textarea class="form-control" name="descricaoProblema" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button><br>
            <?php
            include('mains/cadastraproblemamain.php');
            ?>


            <h2>Problemas já relatados por você:</h2><br>
            
            <?php include('mains/carregadados.php') ?>
    </div>
    </form>
    </div>
</body>

</html>

<?php }else{
    header('location: index.php');
} ?>