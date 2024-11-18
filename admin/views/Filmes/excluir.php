<?php
if (isset($_GET['id']) && !empty($_GET ['is'])){

    require_once '../../controllers/FilmeController.php';

    $FilmeController = new  FilmeController();

    $rs = $FilmeController->remove($_GET['id']);

    if($r){
        header ("location: ./");
        exit();
    }
}