<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Lista de Imóveis</title>
</head>

<body>
    <h1>Imóveis</h1>
    <hr>
    <div>
        <table class="tabelaImoveis">
            <thead>
                <tr class="linhaImoveis">
                    <th class="headImoveis">ID</th>
                    <th class="headImoveis">Descrição</th>
                    <th class="headImoveis">Foto</th>
                    <th class="headImoveis">Valor</th>
                    <th class="headImoveis">Tipo</th>
                </tr>
            </thead>
            <tbody class="tbody">
                <?php
                //importando o UsuarioController.php
                require_once "../controller/ImovelController.php";
                //Chama uma função PHP que permite informar a classe e o método que será acionado
                $imoveis = call_user_func(array('ImovelController', 'listar'));
                if (isset($imoveis)) {
                    foreach ($imoveis as $imovel) {
                ?>
                        <tr>
                            <!-- Como o retorno é um objeto, devemos chamar os gets para mostrar o resultado -->
                            <td class="colunaImoveis"><?php echo $imovel->getId(); ?></td>
                            <td class="colunaImoveis"><?php echo $imovel->getDescricao(); ?></td>
                            <td class="colunaImoveis"><?php echo "<img class='fotoCasa' src='" . $imovel->getFoto() . "'>" ?></td>
                            <td class="colunaImoveis"><?php echo $imovel->getValor(); ?></td>
                            <td class="colunaImoveis"><?php echo $imovel->getTipo(); ?></td>
                            <td class="colunaImoveis">
                                <a href="">Editar</a>
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
    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>