<?php require_once 'global.php'; ?>

<?php
    try {
        $id= $_GET['id'];
        
        $categorias = new Categoria($id);

        $categorias->excluir();

    header('Location: categorias.php');
    } catch (Exception $e) {
        Erro::trataErro($e);
    }