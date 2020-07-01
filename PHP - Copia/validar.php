<?php
	session_start();	

	include_once("conexao.php");	
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		$senha = md5($senha);
			
		
		$result_usuario = "SELECT * FROM usuarios WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
	
		
?>