<?php
	require_once '../Model/crud.class.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Cadastrar novo Funcionário - PHP POO</title>
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
						<h1>Cadastrar funcionário</h1>
					</div>
						<div id="cadastro">
							<form action="cadastrarFuncionarios.php" method="POST">
								<br>
								<input type="text" name="nome" placeholder="Nome Completo" required="required">
								<br>
								<input type="text" name="cpf" placeholder="CPF" required="required">
								<br>
								<input type="text" name="idade" placeholder="Idade" required="required">
								<br>
								<input type="text" name="endereco" placeholder="Endereço" required="required">
								<br>
								<input type="text" name="cep" placeholder="CEP" required="required">
								<br>
								<select name="escolaridade">
									<option value="1">Ensino Fundamental</option>
									<option value="2">Ensino Médio</option>
									<option value="3">Ensino Superior</option>
								</select>
								<br>
								<input type="submit" name="submit" class="cadastro_submit" value="Cadastrar">
							</form>
						</div>
						<div id="sucesso" style="margin-left: 500px;">
							<?php
								include '../Controller/cadastrarFuncionario.php';
							?>
						</div>
				</div>
		</div>
	</body>
</html>