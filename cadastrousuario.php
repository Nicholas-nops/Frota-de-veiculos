<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/stylepagini.css">
    <title>Cadastro de usuario</title>
</head>

<body>
    <div class="container" style="width: 800px;">
        <div style="text-align: center;">
            <h1>Preencha os campos abaixo para cadastrar um novo manutentor:</h1>
        </div>
        <div class="container">
            <div class="pt-5">
                <form method="POST" action="#">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nome :</label>
                        <input type="text" class="form-control" name="nome" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email :</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha :</label>
                        <input type="password" class="form-control" name="password" id="senha" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>

                </form>
                <form method="POST" action="logout.php">
                    <h3>Já possui conta? faça login:</h3>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </form>
            </div>
        </div>
        <?php
        include('mains/cadastrousuariomain.php');
        ?>
    </div>
</body>

</html>