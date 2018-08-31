<?php
	session_start();
	unset(
		$_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioNiveisAcessoId'] ,
		$_SESSION['usuarioEmail']
	);
	
	$_SESSION['loginDeslogado'] = "Session Ended";
	header("Location: ../index.html");
?>