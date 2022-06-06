<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cadastro de Imóveis</title>
</head>

<body>
    <main class="center">
        <section>
            <div class="row">
                <form name="cadUsuario" id="cadUsuario" method="post">
                    <label class="descricao" for="descricao">Descrição:</label><input type="text" name="descricao" id="descricao"></input><br />
                    Foto:<input type="url" name="foto" id="foto"><br />
                    Valor:<input type="text" name="valor" id="valor"><br />
                    Tipo:<select name="tipo" id="tipo">
                        <option value="R">Residencial</option>
                        <option value="C">Comercial</option>
                    </select><br><br>
                    <input type="submit" value="Salvar" name="btnSalvar" id="btnSalvar">
                    <a href="listImoveis.php">
                        <input type="button" value="Listar" name="btnListar">
                    </a>
                </form>
            </div>
        </section>
        <!-- js bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </main>
</body>
<?php
if (isset($_POST['btnSalvar'])) {
    require_once '../controller/ImovelController.php';
    //chama uma função PHP que permite informar a classe e o método que será acionado
    call_user_func(array('ImovelController', 'salvar'));
    header("Location: cadImovel.php?Cadastrado");
}
?>

</html>