<?php
if(isset($_POST) && count($_POST) > 0){
    require_once "../../controllers/FilmeController.php";
    $c = new Filme();
    $c->setNome(htmlspecialchars($_POST['campoNome']));
    $c->setDescricao(htmlspecialchars($_POST['campoDescricao']));
    $FilmeController = new FilmeController();
    $rs = $FilmeController->add($c);
    if ($rs){
        header("location: ./");
        exit();
    }
}
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
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="idGenero" class="form-label">Genero:</label>
                        <input type="text" class="form-control" name="campoGenero" id="idGenero" placeholder="Informe a categoria">
                    </div>
                  <div class="mb-3">
                        <label for="idFilme" class="form-label">Filmes:</label>
                        <input type="text" class="form-control" name="campoFilme" id="idFilme" placeholder="Informe a categoria">
                    </div>                    
                    <div class="mt-3 mb-3">
                        <label for="idDescricao" class="form-label">Descrição</label>
                        <textarea class="form-control" id="idDescricao" name="campoDescricao" placeholder="Insira uma descrição"></textarea>
                    </div>  
                    <div class="mt-3 mb-3">
                        <label for="idDiretor" class="form-label">Diretor</label>
                        <input type="text" class="form-control" name="campoDiretor" id="idDiretor" placeholder="Informe a categoria">
                    </div>                    
                    <div class="mb-3">
                        <label for="idDuracao" class="form-label">Duração</label>
                        <input type="time" class="form-control" name="campoDuracao" id="idDuracao" placeholder="Informe a categoria">
                    </div>
                    <div class="mt-3 mb-3">
                        <label for="idEstudante" class="form-label">Estudante</label>
                        <input type="text" class="form-control" name="campoEstudante" id="idEstudante" placeholder="Informe a categoria">
                    </div>

                    <button type="submit" class="btn btn-success">Gravar</button>
                    <a href="./" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <?php include "../includes/js.php"; ?>
</body>

</html>