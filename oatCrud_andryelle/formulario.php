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
require 'crud/bd_conexao.php';
$message = '';
if (isset ($_POST['nomefilme'])  && isset($_POST['datafilm']) && isset($_POST["nota"]) ) {


  $nomefilme = $_POST['nomefilme'];
  $datafilm = $_POST['datafilm'];
  $nota = $_POST["nota"];

  $sql = 'INSERT INTO formulario(nomefilme, datafilm, nota) VALUES(:nomefilme, :datafilm, :nota)';
  $estado = $connection->prepare($sql);

  if ($estado->execute([':nomefilme' => $nomefilme, ':datafilm' => $datafilm, ':nota' => $nota])) {
    $message = 'Filme cadastrado com sucesso';
  }
}

?>


      <form method="post">


      <?php if(!empty($message)): ?>
          <?= $message; ?>
      <?php endif; ?>


    <div id="content">
          <h1>Formulário</h1>

            <div>
              <label>Nome do filme:</label>
              <input type="text" name="nomefilme" id="nomefilme"> 
            </div>

            <br>

            <div>
              <label>Data que assistiu:</label>
              <input type="text" name="datafilm" id="datafilm">
            </div>

            <br>

            <div>
              <label>Nota de 0 a 5:</label>
              <input type="text" name="nota" id="nota">
            </div>

            <br>

            <div>
            <div>
          <button type="submit" name="enviar" value="Enviar">Enviar</button>
<!--               <input type="submit" name="editar" value="Editar">
              <input type="submit" name="deletar" value="Deletar"> -->
            </div>
      </div>
    </div>

          </form>



      <div id="footer"> <!-- Rodapé -->
        <p>Todos os direitos reservados</p>       
      </div> 

    </body>
</html>