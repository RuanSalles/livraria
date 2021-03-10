<?php
require 'livro.php';
$livro = new Livro ();

if (!empty($_POST['id'])) {
$titulo = $_POST['titulo'] ;
$qtpaginas = $_POST['qtpaginas'] ;
$autor = $_POST['autor'] ;
$editora = $_POST['editora'] ;
$categoria =$_POST['categoria'] ;
$qtlivros = $_POST['qtlivros'] ;
$id = $_POST['id'];




if(!empty($titulo)) {
    $livro->editar($titulo, $qtpaginas, $autor, $editora, $categoria, $qtlivros, $id);
}

header('Location: index.php');

}



?>