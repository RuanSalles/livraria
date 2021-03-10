<?php
require 'livro.php';
$livro = new Livro ();

if (!empty($_POST['id'])) {
$titulo = addslashes($_POST['titulo']) ;
$qtpaginas = addslashes($_POST['qtpaginas']) ;
$autor = addslashes($_POST['autor']) ;
$editora = addslashes($_POST['editora']) ;
$categoria = addslashes($_POST['categoria']) ;
$qtlivros = addslashes($_POST['qtlivros']) ;


if(!empty($titulo)) {
    $livro->editar($titulo, $qtpaginas, $autor, $editora, $categoria, $qtlivros, $id);
}

header('Location: index.php');
}

?>