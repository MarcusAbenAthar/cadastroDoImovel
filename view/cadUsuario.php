<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cadastro de Usuario</title>
</head>

<body>
    <main>
        <section>
            <div class="row">
                <form name="cadUsuario" id="cadUsuario" method="post">
                    Login:<input type="text" name="login" id="login"><br />
                    Senha:<input type="password" name="senha1" id="senha1"><br />
                    Confirmação de senha:<input type="password" name="senha2" id="senha2"><br />
                    Permissão:<select name="permissao" id="permissao">
                        <option value="C">Comum</option>
                        <option value="A">Administrador</option>
                    </select><br><br>
                    <input type="submit" value="Salvar" name="btnSalvar" id="btnSalvar">
                    <a href="listUsuario.php">
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
    require_once '../controller/UsuarioController.php';
    //chama uma função PHP que permite informar a classe e o método que será acionado
    call_user_func(array('UsuarioController', 'salvar'));
    header("Location: cadUsuario.php?Cadastrado");
}
?>

</html>