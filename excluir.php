<?php
require 'livro.php';

$livro = new Livro();


if(!empty($_GET['id'])) {

    $id = $_GET['id'];
    $livro->excluir($id);
    

}

header('Location: index.php');