<?php
$mostrar = new Crud();
$validacoes = new Validacoes();

if(isset($_GET['id'])){
     $id = $_GET['id'];
     $validacoes->filtraFuncionario($id);
}

if(isset($_GET['deleta'])){
	$id = $_GET['deleta'];
	$validacoes->filtraDeleta($id);
}

?>