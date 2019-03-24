<?php
if(isset($_POST['submit'])){
	$validacoes = new Validacoes();
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$idade = $_POST['idade'];
	$endereco = $_POST['endereco'];
	$cep = $_POST['cep'];
	$escolaridade = $_POST['escolaridade'];
	$validacoes->filtraCadastro($nome, $cpf, $idade, $endereco, $cep, $escolaridade);
}
?>