<?php

include('/var/www/html/semestre/classes/conect.php');
//include('./conect.php'); //se estivre na mesma pasta html

	if(isset($_POST['submit']))
	{
	// os comandos abaixo servem para testar se o html está escrevendo o envio de dados na tela//    
  
	/*
		print_r($_POST['FK_Disciplina']);
		print_r($_POST['FK_Turma']);
	*/

   		
		//os nomes das variáveis abaixo devem ser idênticas com as que estão no banco de dados para envio//
		$FK_Disciplina = $_POST['FK_Disciplina'];
    	$FK_Turma = $_POST['FK_Turma'];
       
		
		// consulta do banco
		$result = mysqli_query($conect, "INSERT INTO 
		Disciplina_Turma(       
			FK_Disciplina,
			FK_Turma) 
		VALUES (              
				'$FK_Disciplina',
				'$FK_Turma')");
		

		if($result) {
			//echo "<p> Dados cadastrados com sucesso!</p> <br>";
			header('Location:/semestre/formularios/turma_disciplina/');	
           
		}

		else {
			echo "<p style='color:red;background:white;text-align:center' > Dados não cadastrados, motivo do erro: <br>" .mysqli_error($conect). "</p><br>";
		}		
		
	}
	//print_r ($conect);
    
    
?>

