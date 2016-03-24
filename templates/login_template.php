<html>
	<head>
		<style>
			body{
				background-color: blue;
				opacity: 50%;
			}
			form{
				background-color: white;
				display: block;
				width: 300px;
				min-height: 300px;
				margin: -150px 0 0 -150px;
				top: 50%;				
				left: 50%;
				font-family: 'trebuchet MS';
				position: absolute;
				border-radius: 10px;
			}
			p{
				text-align: center;
				font-size: 30px;
			}
			.error{
				color: red;
				font-size: 15px;
			}
			label{
				text-align: center;
				display: block;
			}
			input{
				text-align: center;
				display: block;
				margin: 10px auto;
				width: 90%;
			}
			input[type="submit"]{
				margin: 20px auto;
				padding: 20px;
			}
		</style>
	</head>
	<body>
		<form method="post" action="index.php">
			<p>Faça o login:</p>
			<?php
				if (isset($msg)) {
					echo "<p class='error'>$msg</p>";
				}
			?>
			<label>Login: <input type="text" name="login"></label>
			<label>Senha: <input type="password" name="senha"></label>
			<input type="submit" name="btn_login" value="Enviar">
		</form>
	</body>
</html>