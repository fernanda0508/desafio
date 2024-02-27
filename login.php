<?php

//comando session_start sempre colocar para acessar com seções em todas as páginas
session_start();

//Comando abaixo para testar se as informações do login estão sendo enviadas;
//print_r($_REQUEST);


if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
	//se os dados existirem no banco, acessará
	include('/var/www/html/semestre/classes/conect.php');
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	
	//prints abaixo para confirmar se estão ok os envios de email e senha registrados no formulaŕio de login (index.php)
	// print_r('email: ' . $email);
	// print_r('<br>');
	// print_r('senha: ' . $senha);

//consulta a tabela (controle) do meu banco (db_cotrole) de dados criada previamente
$sql = "SELECT * FROM Professor WHERE Email = '$email' and Senha = '$senha'";

$result = mysqli_query($conect,$sql);
	
//print_r($result);
	//mysqli_result Object ([current_field] => 0 [field_count] => 12 [lengths] => [num_rows] => 5 [type] => 0 )
//print_r($sql);
	//SELECT * FROM Professor WHERE Email = 'erikpmro@gmail.com' and Senha = '123456'





if (mysqli_num_rows($result)<1) 
{
	//print_r("não exite redireciona (header para...) ");

	//comando unset destroi as variáveis se não existirem no banco de dados
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	
	//não existindo os dados no bd envia o usuário para index.php
	header('Location: index.php');
}
else {
	//print_r("Usuario exite e pode acessar a pagina que está em criação ...");	
	
	//percorrer banco para pegar id usuario	
		while($user_data = mysqli_fetch_assoc($result))
		{
			$idProf = $user_data['ID_Professor'];			
		}
		//armazen o ide do usuário:
		$_SESSION['user_id'] = $idProf;	   	

		//echo "O identificado é $idProf";	
		//print_r($_SESSION);
		
		//cria as variáveis para session
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
	
	$Coord = 0;
	$Prof = 0;
	$Adm = 1;
	
	if($Coord == 1){
		//se coordenar
		header('Location: /semestre/formularios/cursos');
	}
	if($Prof == 1){
		//se professor
		header('Location: /semestre/preferencias/');
	}
	else{	
		//se professor
		header('Location: /semestre/formularios/disciplina');
	}

	//se administrador

}


}
else {
	
	//caso não exista os dados, não acessa e retonar a a tela de login
	header('Location:index.php');
}
?>