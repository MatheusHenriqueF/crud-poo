<?php
require_once 'crud.class.php';
require_once '../Controller/functions.php';

class Validacoes extends Crud{

	public function filtraCadastro($nome, $cpf, $idade, $endereco, $cep, $escolaridade){
		$conexao = new Conexao();
		$functions = new Functions();
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
		$functions->errorMysql();
		exit;
	}
}

	public function verificaCadastro(){
		$functions = new Functions();

		if(strlen($this->getNome()) >= 41){
			$functions->avisoNome();
			exit;
		}elseif(strlen($this->getCpf()) >= 12){
			$functions->avisoCpf();
			exit;
		}elseif(strlen($this->getEndereco()) >= 71){
			$functions->avisoEndereco();
			exit;
		}elseif(strlen($this->getCep()) >= 9){
			$functions->avisoCep();
			exit;
		}elseif(strlen($this->getIdade()) >= 3){
			$functions->avisoIdade();
			exit;
		}elseif(strlen($this->getEscolaridade()) >= 2){
			$functions->avisoEscolaridade();
			exit;
		}elseif(empty($this->getNome() 
			&& $this->getCpf() 
			&& $this->getEndereco() 
			&& $this->getCep() 
			&& $this->getIdade() 
			&& $this->getEscolaridade())){
			$functions->avisoCamposVazios();
		}else{
			$this->insert();
		}
	}

	public function filtraUpdate($id, $nome){
		$conexao = new Conexao();
		$functions = new Functions();
		$id = mysqli_real_escape_string($conexao->conecta(), $id);
		$nome = mysqli_real_escape_string($conexao->conecta(), $nome);

		if(empty($nome)){
			$functions->avisoNomeUpdate();
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

	public function filtraFuncionario($id){
		$conexao = new Conexao();
		$id = mysqli_real_escape_string($conexao->conecta(), $id);
		$this->setId($id);
		$this->mostraFuncionario();
	}

	public function mostraFuncionario(){
		$conexao = new Conexao();
		$functions = new Functions();
		$sql = "SELECT * FROM cadastro WHERE id = '{$this->getId()}'";
		$query = mysqli_query($conexao->conecta(), $sql);
		
		foreach ($query as $linha) {
			$id = $linha['id'];
			$nome = $linha['nome'];
			$cpf = $linha['cpf'];
			$functions->listaFuncionario($id,$nome,$cpf);
		}
	}
}

?>