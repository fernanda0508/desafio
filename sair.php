
<?php
//iniciar a seção:
session_start();

//destruir os dados da seção:
unset($_SESSION['email']);
unset($_SESSION['senha']);
	 	
//não existindo a session redirecionar usuário para index.php
header("Location: /semestre/");


?>