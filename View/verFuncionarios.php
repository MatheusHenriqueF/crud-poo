<?php
  require_once '../Model/crud.class.php';
  $mostrar = new Crud();
?>

<!DOCTYPE html>
<html>
  <head>
    	<title>Ver Funcionários - PHP POO</title>
      <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <meta charset="utf-8">
  </head>
  <body>
      <div id="container">
          <nav id="navigation">
              <a href="../View/cadastrarFuncionarios.php">CADASTRAR FUNCIONÁRIOS</a>
              <a href="../View/verFuncionarios.php">FUNCIONÁRIOS CADASTRADOS</a>
          </nav>
          
        	<table id="customers">
              <tr>
                  <th>Funcionários</th>
              </tr>
              <tr>
                  <td><?php $mostrar->select();?></td>
              </tr>
          </table>

          <div id="alter_del">
              <div id="info_alter_del">
                <?php 
                    include '../Controller/verFuncionarios.php';
                ?>      
             </div>
          </div>
      </div>
  </body>
</html>