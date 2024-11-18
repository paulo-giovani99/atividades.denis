<?php 
   require_once "../../controllers/FilmeController.php";
   $FilmeController = new FilmeController();
   $resultData = $FilmeController->read();

    /*echo '<pre>';
   var_dump($resultData);
   die();*/
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "../includes/head.php"; ?>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <?php include "../includes/menu.php"; ?>
            <div class="col-9">
                <h3>Cadastro de Filmes</h3>
                <a href="adicionar.php" class="btn btn-success">Adicionar</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Filme</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Diretor</th>
                            <th scope="col">Durção</th>
                            <th scope="col">Estudante</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php foreach($resultData as $dado) { ?>
                        <tr>
                            <td><?= $dado->getId(); ?></td>
                            <td><?= $dado->getGenero(); ?></td>
                            <td><?= $dado->getFilme(); ?></td>
                            <td><?= $dado->getDescricao(); ?></td>
                            <td><?= $dado->getDiretor(); ?></td>
                            <td><?= $dado->getDuracao(); ?></td>
                            <td><?= $dado->getEstudante(); ?></td>
                            <td>
                                <a href="editar.php?id=<?= $dado->getId(); ?>"
                                    class="btn btn-sm btn-warning">Editar</a>
                                <a href="javascript:excluir(<?= $dado->getId(); ?>)"
                                    class="btn btn-sm btn-danger">Excluir</a>
                            </td>
                        </tr>
                       <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
    <script>
        function excluir(id) {
            if(confirm("Tem certeza?")) {
                window.location = "excluir.php?id=" + id;
            }
        }
    </script>
</body>

</html>