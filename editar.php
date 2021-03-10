<?php
require 'livro.php';
$livro = new Livro ();

if (!empty ($_GET['id'])) {
    $id = $_GET['id'];
   
    $info = $livro->getInfo($id);

    if(empty($info['titulo'])) {
        header('Location: index.php');
        exit;
    }
  
    
} else {
    header('Location: index.php');
    exit;
}
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
    <h1>EDITAR</h1>


    <form method="POST" class='form-group' action="editar_submit.php">
    <input type="hidden" name="id" value="<?php echo $info['id']; ?>">
    Titulo:
    <input type="text" name="titulo" class='form-control' value="<?php echo $info['titulo']; ?>" required><br><br>
    Quantidade de páginas:
    <input type="number" name="qtpaginas" class='form-control' value="<?php echo $info['qtpaginas']; ?>" required><br><br>
    Autor:
    <input type="text" name="autor" class='form-control' value="<?php echo $info['autor']; ?>" required><br><br>
    Editora:
    <input type="text" name="editora" class='form-control' value="<?php echo $info['editora']; ?>" required><br><br>
    Categoria:
    <input type="text" name="categoria" class='form-control' value="<?php echo $info['categoria']; ?>" required><br><br>
    Quantidade de livros:
    <input type="number" name="qtlivros" class='form-control' value="<?php echo $info['qtlivros']; ?>" required><br><br>

    <input type="submit" class='btn btn-primary btn-lg' value="Salvar">


    </form>
    </div>

  
    </div>
</body>
</html>