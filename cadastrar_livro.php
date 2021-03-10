<?php 

require 'livro.php';

$livro = new Livro();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class='container'>
<h1><a href="index.php"> Livraria Machado de Assiss  </a>  </h1>
</div>

<div class='container'>
<h1>Cadastrar Livro</h1>

    <form method="POST" class='form-group'>
    
    Titulo:
    <input type="text" name="titulo" class='form-control' required><br><br>
    Quantidade de páginas:
    <input type="number" name="qtpaginas" class='form-control' required><br><br>
    Autor:
    <input type="text" name="autor" class='form-control' required><br><br>
    Editora:
    <input type="text" name="editora" class='form-control' required><br><br>
    Categoria:
    <input type="text" name="categoria" class='form-control' required><br><br>
    Quantidade de livros:
    <input type="number" name="qtlivros" class='form-control' required><br><br>

    <input type="submit" class='btn btn-primary btn-lg' value="Cadastrar">


    </form>
    </div>
       
    <?php

    $livro = new Livro();

if(!empty($_POST['titulo'])) {
    $titulo = addslashes($_POST['titulo']) ;
    $qtpaginas = addslashes($_POST['qtpaginas']) ;
    $autor = addslashes($_POST['autor']) ;
    $editora = addslashes($_POST['editora']) ;
    $categoria = addslashes($_POST['categoria']) ;
    $qtlivros = addslashes($_POST['qtlivros']) ;
    
    $livro->adicionarLivro($titulo, $qtpaginas, $autor, $editora, $categoria, $qtlivros);

    header('Location: index.php');
}

?>
</body>
</html>