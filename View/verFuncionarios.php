<?php
  require_once '../Model/crud.class.php';
  require_once '../Controller/functions.php';
  $mostrar = new Crud();
  $functions = new Functions();
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
                  <td>
                      <ul>
                        <?php $mostrar->select();?>
                      </ul>
                  </td>
              </tr>
          </table>

          <div id="alter_del">
              <div id="info_alter_del">
                <p>
                  <?php 
                      include '../Controller/verFuncionarios.php';
                  ?>      
                </p>
             </div>
          </div>
      </div>
  </body>
</html>