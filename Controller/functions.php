<?php
Class Functions{
		public function listarId($id,$nome){
			echo "<li><a href=verFuncionarios.php?id=$id>$nome</a></li>";
		}

		public function listaFuncionario($id, $nome, $cpf){
			echo "<p>".$nome." CPF: ".$cpf."</p>";
			echo "<a href='alterarFuncionarios.php?alterar=".$id." '>Alterar</a> | ";
			echo "<a href='verFuncionarios.php?deleta=".$id." '>Deletar</a>";
		}
		
		public function updateSucess(){
			echo "Nome alterado com sucesso.";
		}
		public function errorMysql(){
			echo "Error: ".mysqli_error();
		}
		public function insertSucess(){
			echo "Cadastrado com sucesso.";
		}
		public function deleteSucess(){
			echo "Deletado com sucesso.</p>";
			echo "<a href=" .$_SERVER['PHP_SELF']. ">Clique aqui para atualizar.";
		}
		public function semCadastros(){
			echo "Não há nenhum funcionário registrado.";
		}

		public function avisoNome(){
			echo "O nome não pode ser maior que 40 caracteres.";
		}
		public function avisoCpf(){
			echo "O CPF não pode ter mais que 11 caracteres.";
		}
		public function avisoEndereco(){
			echo "O Endereço não pode ter mais que 70 caracteres.";
		}
		public function avisoCep(){
			echo "O CEP não pode ter mais que 8 dígitos.";
		}
		public function avisoIdade(){
			echo "A idade não pode passar de 2 caracteres.";
		}
		public function avisoEscolaridade(){
			echo "A Escolaridade não pode ter mais que 1 digito.";
		}
		public function avisoCamposVazios(){
			echo "Favor, preencher todos os campos.";
		}
		
		public function avisoNomeUpdate(){
			echo "O campo nome está vazio.";
		}
}
?>