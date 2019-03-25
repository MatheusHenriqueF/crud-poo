<?php
Class Functions{
		public function listarId($id,$nome){
			echo "<li><a href=verFuncionarios.php?id=$id>$nome</a></li>";
		}

		public function listaFuncionario($id, $nome, $cpf){
			echo "<p>".$nome.", CPF: ".$cpf."</p>";
			echo "<a href='alterarFuncionarios.php?alterar=".$id." '>Alterar</a> | ";
			echo "<a href='verFuncionarios.php?deleta=".$id." '>Deletar</a>";
		}

		/* Respostas para Criar, Alterar e Deletar Funcionários */
		public function updateSucess(){
			echo "<p>Nome alterado com sucesso.</p>";
		}
		public function errorMysql(){
			echo "<p>Error: </p>".mysqli_error();
		}
		public function insertSucess(){
			echo "<p>Cadastrado com sucesso.</p>";
		}
		public function deleteSucess(){
			echo "<p>Deletado com sucesso.</p>";
			echo "<p><a href=" .$_SERVER['PHP_SELF']. ">Clique aqui para atualizar.</p>";
		}
		public function semCadastros(){
			echo "<p>Não há nenhum funcionário registrado.</p>";
		}

		/* Respostas da Validação de Cadastro de Funcionário */
		public function avisoNome(){
			echo "<p>O nome não pode ser maior que 40 caracteres.</p>";
		}
		public function avisoCpf(){
			echo "<p>O CPF não pode ter mais que 11 caracteres.</p>";
		}
		public function avisoEndereco(){
			echo "<p>O Endereço não pode ter mais que 70 caracteres.</p>";
		}
		public function avisoCep(){
			echo "<p>O CEP não pode ter mais que 8 dígitos.</p>";
		}
		public function avisoIdade(){
			echo "<p>A idade não pode passar de 2 caracteres.</p>";
		}
		public function avisoEscolaridade(){
			echo "<p>A Escolaridade não pode ter mais que 1 digito.</p>";
		}
		public function avisoCamposVazios(){
			echo "<p>Favor, preencher todos os campos.</p>";
		}

		/* Respostas de Validação de Update */
		public function avisoNomeUpdate(){
			echo "<p>O nome campo está vazio.</p>";
		}
}
?>