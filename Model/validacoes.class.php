<?php
require_once 'crud.class.php';

class Validacoes extends Crud{

	public function filtraCadastro($nome, $cpf, $idade, $endereco, $cep, $escolaridade){
		$conexao = new Conexao();
		$nome = mysqli_real_escape_string($conexao->conecta(), $nome);
		$cpf = mysqli_real_escape_string($conexao->conecta(), $cpf);
		$idade = mysqli_real_escape_string($conexao->conecta(), $idade);
		$endereco = mysqli_real_escape_string($conexao->conecta(), $endereco);
		$cep = mysqli_real_escape_string($conexao->conecta(), $cep);
		$escolaridade = mysqli_real_escape_string($conexao->conecta(), $escolaridade);
		
	if($conexao->conecta()){
		$this->setNome($nome);
		$this->setEndereco($endereco);
		$this->setCpf($cpf);
		$this->setIdade($idade);
		$this->setCep($cep);
		$this->setEscolaridade($escolaridade);
		$this->verificaCadastro();
	}else{
		echo "Error: ".mysqli_error();
		exit;
	}
}

	public function verificaCadastro(){
		if(strlen($this->getNome()) >= 41){
			echo "O nome não pode ser maior que 40 caracteres.";
			exit;
		}elseif(strlen($this->getCpf()) >= 12){
			echo "O CPF não pode ter mais que 11 caracteres.";
			exit;
		}elseif(strlen($this->getEndereco()) >= 71){
			echo "O Endereço não pode ter mais que 70 caracteres.";
			exit;
		}elseif(strlen($this->getCep()) >= 9){
			echo "O CEP não pode ter mais que 8 dígitos";
			exit;
		}elseif(strlen($this->getIdade()) >= 3){
			echo "A idade não pode passar de 2 caracteres.";
			exit;
		}elseif(strlen($this->getEscolaridade()) >= 2){
			echo "A Escolaridade não pode ter mais que 1 digito";
			exit;
		}elseif(empty($this->getNome() && $this->getCpf() && $this->getEndereco() && $this->getCep() && $this->getIdade() && $this->getEscolaridade())){
			echo "Favor, preencher todos os campos!";
		}else{
			$this->insert();
		}
	}

	public function filtraFuncionario($id){
		$conexao = new Conexao();
		$id = mysqli_real_escape_string($conexao->conecta(), $id);
		$this->setId($id);
		$this->mostraFuncionario();
	}

	public function mostraFuncionario(){
		$conexao = new Conexao();
		$sql = "SELECT * FROM cadastro WHERE id = '{$this->getId()}'";
		$query = mysqli_query($conexao->conecta(), $sql);

		while ($linha = mysqli_fetch_array($query)) {
			$id = $linha['id'];
			$nome = $linha['nome'];
			$cpf = $linha['cpf'];
			
			echo "<p>".$nome.", CPF: ".$cpf."</p>";
			echo "<a href='alterarFuncionarios.php?alterar=".$id." '>Alterar</a> | ";
			echo "<a href='verFuncionarios.php?deleta=".$id." '>Deletar</a>";
		}
	}

	public function filtraUpdate($id, $nome){
		$conexao = new Conexao();
		$id = mysqli_real_escape_string($conexao->conecta(), $id);
		$nome = mysqli_real_escape_string($conexao->conecta(), $nome);

		if(empty($nome)){
			echo "<p>O campo está vazio.</p>";
		}else{
			$this->setId($id);
			$this->setNome($nome);
			$this->update();
		}
	}

	public function filtraDeleta($id){
		$conexao = new Conexao();
		$id = mysqli_real_escape_string($conexao->conecta(), $id);
		$this->setId($id);
		$this->delete();

	}
}

?>