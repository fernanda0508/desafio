<?php

include('/var/www/html/semestre/classes/conect.php');
//include('./conect.php'); //se estivre na mesma pasta html

	if(isset($_POST['submit']))
	{
	// os comandos abaixo servem para testar se o html está escrevendo o envio de dados na tela//
   /* 
    print_r($_POST['nomeDisciplina']);
    print_r($_POST['Carga_horaria_semestral']);
    print_r($_POST['Carga_horaria_semanal']);
   */
  
        
	//inclui uma vez o arquivo de conexão ao banco//
	//include_once('classes/conect.php');
	
		
	//os nomes das variáveis abaixo devem ser idênticas com as que estão no banco de dados para envio//
	$nomedisciplina = $_POST['nomeDisciplina'];
    $chSemestre = $_POST['Carga_horaria_semestral'];
    $chSemana = $_POST['Carga_horaria_semanal'];     
	
		
		//comando que chama a variável criada no arquivo de conexão "$link" do bd e insere os dados na tabela indicada como nome de "controle" existente no banco de dados//
		//os campos não necessariamente precisam estar em ordem com o bd, mas todos devem existir e ter o mesmo nome//
		$result = mysqli_query($conect, "INSERT INTO 
    Disciplina(
            Nome,
            Carga_Horaria_Semestral,
            Ch_Semanal_Disc) 
    VALUES (            
            '$nomedisciplina',
            '$chSemestre',
            '$chSemana')");
		

		if($result) {
			echo "<p> Dados cadastrados com sucesso!</p> <br>";
			header('Location:/semestre/formularios/disciplina/');	
           
		}

		else {
			echo "<p style='color:red;background:white;text-align:center' > Dados não cadastrados, motivo do erro: <br>" .mysqli_error($conect). "</p><br>";
		}		
		
	}
	//print_r ($conect);    
    
?>
