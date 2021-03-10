<?php 

require 'livro.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1><a href="index.php"> Livraria Machado de Assiss  </a>  </h1>

<h1>Cadastrar Livro</h1>

    <form method="POST">
    
    Titulo:
    <input type="text" name="titulo" required><br><br>
    Quantidade de páginas:
    <input type="number" name="qtpaginas" required><br><br>
    Autor:
    <input type="text" name="autor" required><br><br>
    Editora:
    <input type="text" name="editora" required><br><br>
    Categoria:
    <input type="text" name="categoria" required><br><br>
    Quantidade de livros:
    <input type="number" name="qtlivros" required><br><br>

    <input type="submit" value="Cadastrar">


    </form>

       
    <?php

    $livro = new Livro();

if(!empty($_POST['titulo'])) {
    $titulo = addslashes($_POST['titulo']) ;
    $qtpaginas = addslashes($_POST['qtpaginas']) ;
    $autor = addslashes($_POST['autor']) ;
    $editora = addslashes($_POST['editora']) ;
    $categoria = addslashes($_POST['categoria']) ;
    $qtlivros = addslashes($_POST['qtlivros']) ;
    
    $livro->adicionarLivro($titulo, $qtpaginas, $autor, $editora, $categoria, $qtpaginas);
}

?>
</body>
</html>