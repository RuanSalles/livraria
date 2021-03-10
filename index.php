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
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class='container'>
    <h1><a href="index.php"> Machado de Assiss  </a>  </h1>
    </div>

    <div class='container'>
    <a href="cadastrar_livro.php" class='btn btn-primary btn-lg'>Cadastrar Livros</a>

<br><br>
    <table border="1" class='table table-striped'  >
    <tr>
    <th>ID</th>
    <th>Titulo</th>
    <th>Quantidade de Páginas</th>
    <th>Autor</th>
    <th>Editora</th>
    <th>Categoria</th>
    <th>Quantidade de Livros</th>
    <th>Ações</th>
    </tr>


    <?php

$lista = $livro->getAll();
foreach($lista as $item):
?>
<tr>
<td><?php echo $item['id']; ?></td>
<td><?php echo $item['titulo']; ?></td>
<td><?php echo $item['qtpaginas']; ?></td>
<td><?php echo $item['autor']; ?></td>
<td><?php echo $item['editora']; ?></td>
<td><?php echo $item['categoria']; ?></td>
<td><?php echo $item['qtlivros']; ?></td>
<td><a class='btn btn-success btn-md' href="editar.php?id=<?php echo $item['id']; ?>">Editar</a><br>
<a class='btn btn-danger btn-md' href="excluir.php?id=<?php echo $item['id']; ?>">Excluir</a></td>
</tr>

<?php endforeach; ?>

  </table>

  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>