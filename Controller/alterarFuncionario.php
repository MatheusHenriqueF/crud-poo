<?php
$validacoes = new Validacoes();

if(isset($_GET['submit_alterar'])){
	$nome = $_GET['nome'];
	$id = $_GET['alterar']; 
	$validacoes->filtraUpdate($id, $nome);
}
?>