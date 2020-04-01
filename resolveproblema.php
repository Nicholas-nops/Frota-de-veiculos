<?php
session_start();
if (isset($_SESSION['permissao']) && $_SESSION['permissao'] == 1) {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" />
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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6" style="padding-top: 150px;">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">
                            <h1>Manutenções: </h1>
                        </label><br>
                        <div class="input-group mb-3" style="width: 300px;">
                            <select name="infosveiculo" id="infosveiculo" class="custom-select" id="inputGroupSelect01">
                                <option value="">Selecione</option>
                                <?php
                                include('mains/getPlacas.php');
                                ?>
                            </select>
                        </div>
                        <input type="button" name="enviar" class="enviar btn btn-primary" value="Prosseguir" />
                    </div>
                    <div id="table">
                    </div>
                </div>
    </body>
    <script>
        $(document).on('click', '.enviar', function(e){
            e.preventDefault();
            var placa = $('#infosveiculo').val();
            var formdata = new FormData();
            formdata.append('placa', placa);
            $.ajax({
                type: "POST",
                url: "mains/getVeiculo.php",
                data: formdata,
                processData: false,
                contentType: false,
                success: function(msg) {
                    if (msg) {
                        document.getElementById("table").innerHTML = msg;
                    } else {
                        return;
                    }
                }
            });
        });
        $(document).on('click', '.attStatus', function(e){
            e.preventDefault();
            var placa = $('#infosveiculo').val();
            var status = $('#status').val();
            var formdata = new FormData();
            var formdata2 = new FormData();
            formdata.append('placa', placa);
            formdata.append('status', status);
            $.ajax({
                type: "POST",
                url: "mains/setStatus.php",
                data: formdata,formdata2,
                processData: false,
                contentType: false,
                success: function(data) {
                    alert('Status atualizado com sucesso!')
                }
            });
        });
    </script>

    </html>

<?php } else {
    header('location: index.php');
}
?>