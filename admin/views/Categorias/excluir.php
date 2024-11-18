<?php
if (isset($_GET['id']) && !empty($_GET ['is'])){

    require_once '../../controllers/CategoriaController.php';

    $CategoriaController = new  CategoriaController();

    $rs = $CategoriaController->remove($_GET['id']);

    if($r){
        header ("location: ./");
        exit();
    }
}