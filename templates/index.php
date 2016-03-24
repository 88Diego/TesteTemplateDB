<?php

include('config/database.php');

$stmt = mysqli_prepare($db_conn, "SELECT cod_usuario FROM pi_usuario WHERE login = ? AND senha = ?");

mysqli_stmt_bind_param($stmt, 'ss', $_POST['login'], $_POST['senha']);

mysqli_stmt_execute($stmt);

mysqli_stmt_fetch($stmt);

var_dump($stmt);

if (isset($_POST['btn_login'])) {
	
	if (isset($logins[$_POST['login']])) {
		
		if ($logins[$_POST['login']] == $_POST['senha']) {
			
			include('admin.php');
			
		} else {
			
			$msg = 'Usuário ou Senha Inválidos';
				
			include('login_template.php');				
			
		}
	
	} else {
				
		$msg = 'Usuário ou Senha Inválidos';
				
		include('login_template.php');			
				
	}
	
} else {
	
	include('login_template.php');	
	
}
?>