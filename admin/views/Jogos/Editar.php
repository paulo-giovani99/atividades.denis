<?php
    require_once "../../controllers/JogoController.php";
    $JogoController = new JogoController();

    if (isset($_POST) && count($_POST) > 0)
    {
        $c = new Jogo();

        $c->setId(htmlspecialchars($_POST['campoId']));
        $c->setJogo(htmlspecialchars($_POST['campoJogo']));
        $c->setNumero_integrantes(htmlspecialchars($_POST['campoNumero_integrantes']));
        $c->setRegras(htmlspecialchars($_POST['campoRegras']));
        $rs = $JogoController->edit($c);
        
        if ($rs){
            header("location: ./");
            exit();
        }
    }
    else if(isset($_GET['$id']) && !empty($_GET['id']));
    {
        $dado = $JogoController->findId($_GET['id']);
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
                <h3>Cadastro de Jogos</h3>

                <form action="" method="post">
                <input type="hidden" name="campoId" value="<?= $dado->getId(); ?>">
                  <div class="mb-3">
                        <label for="idJogo" class="form-label">Jogos:</label>
                        <input type="text" class="form-control" name="campoJogo" id="idJogo" placeholder="Informe a categoria"
                        value="<?= $dado->getJogo(); ?>">
                    </div>                    
                    <div class="mt-3 mb-3">
                        <label for="idNumero_integrantes" class="form-label">Numero de integrantes:</label>
                        <textarea class="form-control" id="idNumero_integrantes" name="campoNumero_integrantes" placeholder="Insira uma descrição"><?= $dado->getNumero_Integrantes(); ?></textarea>
                    </div>  
                    <div class="mt-3 mb-3">
                        <label for="idRegras" class="form-label">Regras:</label>
                        <input type="text" class="form-control" name="campoRegras" id="idRegras" placeholder="Informe a categoria"
                        value="<?= $dado->getRegras(); ?>">
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