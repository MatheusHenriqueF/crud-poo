<?php
require_once 'conexao.php';
require_once '../Controller/validacoes.class.php';
require_once '../Controller/functions.php';

class Crud{
	private $id;
	private $nome;
	private $cpf;
	private $idade;
	private $endereco;
	private $cep;
	private $escolaridade;

	public function select(){
		$functions = new Functions();
		$conexao = new Conexao();
		$sql = "SELECT * FROM cadastro";
		$query = mysqli_query($conexao->conecta(), $sql);

		foreach ($query as $linha) {
			$id = $linha['id'];
			$nome = $linha['nome'];
			$functions->listarId($id,$nome);
		}

		if(mysqli_num_rows($query) <= 0){
			$functions->semCadastros();
		}
	}

	public function insert(){
		$conexao = new Conexao();
		$functions = new Functions();
		$sql = "INSERT INTO cadastro(nome, cpf, idade, endereco, cep, escolaridade) VALUES";
	    $sql .= 
				"(
				'".$this->getNome()."',
				'".$this->getCpf()."',
				'".$this->getIdade()."',
				'".$this->getEndereco()."',
				'".$this->getCep()."',
				'".$this->getEscolaridade()."')";

		if(mysqli_query($conexao->conecta(), $sql) or die (mysqli_error())) {
			$functions->insertSucess();
		}else{
			$functions->errorMysql();
		}
	}

	public function update(){
		$conexao = new Conexao();
		$functions = new Functions();
		$sql = "UPDATE cadastro SET nome = '{$this->getNome()}' WHERE id= '{$this->getId()}'";

		if(mysqli_query($conexao->conecta(), $sql) or die (mysqli_error())){
			$functions->updateSucess();
		}else{
			$functions->errorMysql();
		}

	}

	public function delete(){
		$conexao = new Conexao();
		$functions = new Functions();
		$sql = "DELETE FROM cadastro WHERE id = {$this->getId()}";

		if(mysqli_query($conexao->conecta(), $sql) or die (mysqli_error())){
			$functions->deleteSucess();
		}
		else{
			$functions->errorMysql();
		}
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

	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getCpf(){
		return $this->cpf;
	}
	public function setCpf($cpf){
		$this->cpf = $cpf;
	}
	public function getIdade(){
		return $this->idade;
	}
	public function setIdade($idade){
		$this->idade = $idade;
	}
	public function getEndereco(){
		return $this->endereco;
	}
	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}
	public function getCep(){
		return $this->cep;
	}
	public function setCep($cep){
		$this->cep = $cep;
	}
	public function getEscolaridade(){
		return $this->escolaridade;
	}
	public function setEscolaridade($escolaridade){
		$this->escolaridade = $escolaridade;
	}
	public function getId(){
		return $this->id;
	}
	public function setId($id){
		$this->id = $id;
	}
}
?>