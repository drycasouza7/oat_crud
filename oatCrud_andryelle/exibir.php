<!DOCTYPE html>
<html>
<head>

  <title> DrycaFilm </title> <!-- Projeto WebService 2019 -->
  <meta charset="utf-8">

<!--  <link rel="stylesheet" type="text/css" href="style/estilo-grid.css"> 
 -->
  <link rel="stylesheet" type="text/css" href="style/estilo-grid-1200.css" media="screen and (min-width:1200px)">

  <link rel="stylesheet" type="text/css" href="style/estilo-grid-1024.css" media="screen and (max-width:1024px)">

  <link rel="stylesheet" type="text/css" href="style/estilo-grid-600.css" media="screen and (max-width:600px)">

  <link rel="stylesheet" type="text/css" href="style/estilo-grid-320.css" media="screen and (max-width:320px)">

  <link rel="stylesheet" type="text/css" href="style/estilo-grid-new.css">

</head>
<body>

  <div id="container">   <!-- Caixa -->

    <div id="header"> <!-- Cabeçalho -->
    <img src="https://assets.papelpop.com/wp-content/uploads/2018/12/filmes-20191.jpg">
      <h1> Filmes </h1> <!-- Título do Site -->

    </div>

    <div id="menu">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="exibir.php">Filmes</a></li>
        <li><a href="formulario.php">Cadastrar Filme</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </div>


<?php

       ini_set(“display_errors”,1);
       ini_set(“display_startup_erros”,1);
        error_reporting(E_ALL);
?>

<?php
require 'crud/bd_conexao.php';

$sql = 'SELECT * FROM formulario';
$estado = $connection->prepare($sql);
$estado->execute();
$p = $estado->fetchAll(PDO::FETCH_OBJ);
 ?>

<!--       <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Data</th>
          <th>Nota</th>
        </tr>

        <?php foreach($p as $formulario): ?>
          <tr>
            <td><?= $formulario->id; ?></td>
            <td><?= $formulario->nomefilme; ?></td>
            <td><?= $formulario->datafilm; ?></td>
            <td><?= $formulario->nota; ?></td>

          <td>
              <a href="edit.php?id=<?= $formulario->id ?>">Editar</a>
              <a href="delete.php?id=<?= $formulario->id ?>" class='btn btn-danger'>Deletar</a>

              <button type="submit" name="salvar" value="Salvar">Atualizar</button>
            </td>

          </tr>
        <?php endforeach; ?>

      </table> -->




          <table border="1">
          <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Data</td>
            <td>Nota</td>
          </tr>

        <?php foreach($p as $formulario): ?>

          <tr>
            <td><?= $formulario->id; ?></td>
            <td><?= $formulario->nomefilme; ?></td>
            <td><?= $formulario->datafilm; ?></td>
            <td><?= $formulario->nota; ?></td>

              <td>
                  <a href="edit.php?id=<?= $formulario->id ?>">Editar</a>
                  <a href="delete.php?id=<?= $formulario->id ?>" class='btn btn-danger'>Deletar</a>
              </td>
          </tr>
        <?php endforeach; ?>

<!--           <tr>
            <td>linha 2, célula 1</td>
            <td>linha 2, célula 2</td>
          </tr>
          <tr>
            <td>linha 2, célula 1</td>
            <td>linha 2, célula 2</td>
          </tr>
          <tr>
            <td>linha 2, célula 1</td>
            <td>linha 2, célula 2</td>
          </tr> -->
          </table>


<!-- 

      <button type="submit" name="salvar" value="Salvar">Atualizar</button> -->


            <div id="footer"> <!-- Rodapé -->
        <p>Todos os direitos reservados</p>       
      </div> 

</body>
</html>



