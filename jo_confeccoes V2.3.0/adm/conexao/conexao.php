<?php
	$servidor = "127.0.0.1:3306";
	$usuario = "root";
	$senha = "";
	$dbname = "usuarios";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}
?>
