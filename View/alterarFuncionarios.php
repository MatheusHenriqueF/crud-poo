<?php
require_once '../Model/crud.class.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Alterar Funcionário - PHP POO</title>
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
				<div id="middle">
					<div id="title">
						<h1>Alterar Informações de funcionário</h1>
					</div>
					<div id="form">
						<form action="alterarFuncionarios.php" method="GET">
							<input type="text" name="nome" placeholder="Novo nome*" required="required">
							<br>
							<input type="hidden" name="alterar" value="<?php echo $_GET['alterar']; ?>">
							<input type="submit" name="submit_alterar" id="submit">
						</form>
						<div id="sucesso">
							<p>
								<?php 
									include '../Controller/alterarFuncionario.php';
								?>
							</p>
						</div>
						<div id="info_user">
							<?php 
								include '../Controller/alterarFuncionarioInfo.php';
							?>
						</div>
					</div>
				</div>
		</div>
	</body>
</html>