<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/styleindex.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Login</h3>
                        <h5>Insira os dados para login</h5>
                    </div>
                    <div class="panel-body">
                        <form accept-charset="UTF-8" role="form" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="seuemail@example.com" name="email" type="text" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="senha" name="password" type="password" value="" required>
                                </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="Login">
                            </fieldset>
                        </form>
                        <div style="text-align: center;">
                            <br>
                            Ou
                            <br>
                            <a href="cadastrousuario.php">Cadastre-se</a>
                            <div>
                                <?php
                                include('mains/indexmain.php')
                                ?>
                                <hr />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>
<?php
if (isset($_GET['msg'])) {
    echo "<script>alert('Cadastrado com sucesso');location.href = 'index.php'</script>";
}
?>

</html>