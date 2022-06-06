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

<body>
    <main>
        <h1>Usuários</h1>
        <hr>
        <div>
            <table class="tableGeral">
                <thead>
                    <tr>
                        <th>Login</th>
                        <th>Permissão</th>
                        <th>Ações</th>
                        <th><a href="cadUsuario.php">Novo Usuário</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //importando o UsuarioController.php
                    require_once "../controller/UsuarioController.php";
                    //Chama uma função PHP que permite informar a classe e o método que será acionado
                    $usuarios = call_user_func(array('UsuarioController', 'listar'));
                    if (isset($usuarios)) {
                        foreach ($usuarios as $usuario) {
                    ?>
                            <tr>
                                <!-- Como o retorno é um objeto, devemos chamar os gets para mostrar o resultado -->
                                <td><?php echo $usuario->getLogin(); ?></td>
                                <td><?php echo $usuario->getPermissao(); ?></td>
                                <td>
                                    <a href="editUsuario.php?id=<?php echo $usuario->getId(); ?>">Editar</a>
                                    /
                                    <a href="">Excluir</a>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="5">Nenhum registro encontrado</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
</body>