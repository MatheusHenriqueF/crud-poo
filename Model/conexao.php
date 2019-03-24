<?php
class Conexao{
	public function conecta(){
		$conn = mysqli_connect("localhost", "root", "root", "formulario");  
			if(mysqli_connect_errno($conn)){
				echo "Error:" .mysqli_connect_errno();
				exit;
			}else{
				return $conn;
		}		
	}
}
?>