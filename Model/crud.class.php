<?php
require_once 'conexao.php';
require_once 'validacoes.class.php';

class Crud{
	private $id;
	private $nome;
	private $cpf;
	private $idade;
	private $endereco;
	private $cep;
	private $escolaridade;

	public function select(){
		$conexao = new Conexao();
		$sql = "SELECT * FROM cadastro";
		$query = mysqli_query($conexao->conecta(), $sql);

		while ($linha = mysqli_fetch_array($query)) {
			$id = $linha['id'];
			$nome = $linha['nome'];
			echo "<li><a href='verFuncionarios.php?id=".$id."'>".$nome."</a></li>";
		}

		if(mysqli_num_rows($query) <= 0){
			echo "Não há nenhum funcionário registrado.";
		}
	}

	public function insert(){
		$conexao = new Conexao();
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
			echo "Inserido com sucesso!";
		}else{
			echo "Error: ".mysqli_error();
		}
	}

	public function update(){
		$conexao = new Conexao();
		$sql = "UPDATE cadastro SET nome = '{$this->getNome()}' WHERE id= '{$this->getId()}' ";

		if(mysqli_query($conexao->conecta(), $sql) or die (mysqli_error())){
			echo "<p>Nome alterado com sucesso!</p>";
		}else{
			echo "<p>Error: </p>".mysqli_error();
		}

	}

	public function delete(){
		$conexao = new Conexao();
		$sql = "DELETE FROM cadastro WHERE id = {$this->getId()}";

		if(mysqli_query($conexao->conecta(), $sql) or die (mysqli_error())){
			header("Location: verFuncionarios.php");
		}
		else{
			echo "Error: ".mysqli_error();
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