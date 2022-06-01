<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Editar Usuário</title>
</head>

<main>
    <h1>Editar Usuário</h1>
    <hr>
    <div>
        <table style="top:40px;">
            <thead>
                <tr>
                    <th>Login</th>
                    <th>Senha</th>
                    <th>Permissão</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //importando o UsuarioController.php
                require_once "../controller/UsuarioController.php";
                //Chama uma função PHP que permite informar a classe e o método que será acionado
                $usuarios = call_user_func(array('UsuarioController', 'encontrar'));
                if (isset($usuarios)) {
                    foreach ($usuarios as $usuario) {
                ?>
                        <form method="post">
                            <tr>
                                <!-- Como o retorno é um objeto, devemos chamar os gets para mostrar o resultado -->
                                <td><input type="hidden" name="id" value="<?php echo $usuario->getId(); ?>"></td>
                                <td><input type="text" name="login" value="<?php echo $usuario->getLogin(); ?>"></td>
                                <td><input type="text" name="senha" value="<?php echo $usuario->getSenha(); ?>"></td>
                                <td><input type="radio" name="permissao" value="A">A</td>
                                <td><input type="radio" name="permissao" value="C">C</td>
                            </tr>

                    <?php
                    }
                }
                    ?>
            </tbody>
        </table>
    </div>
    <div class="botao">
        <input type="submit" value="Salvar" name="editUsuario">
    </div>
    </form>
    <!-- js bootstrap -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</main>
</body>

<?php
if (isset($_POST['editUsuario'])) {
    $usuario = call_user_func(array('UsuarioController', 'editar'));
    header('Location: listUsuario.php?UsuarioEditadoComSucesso');
}
?>

</html>