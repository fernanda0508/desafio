<?php

include('/var/www/html/semestre/classes/conect.php');
//include('./conect.php'); //se estivre na mesma pasta html

	if(isset($_POST['submit']))
	{
	// os comandos abaixo servem para testar se o html está escrevendo o envio de dados na tela//    
  
  /*
    print_r($_POST['nomeCurso']);
    print_r($_POST['Modalidade']);
    print_r($_POST['Area']);
    print_r($_POST['Sigla']);    
  */
   		
		//os nomes das variáveis abaixo devem ser idênticas com as que estão no banco de dados para envio//
		$nomeCurso = $_POST['nomeCurso'];
    $Modalidade = $_POST['Modalidade'];
    $Area = $_POST['Area'];
    $Sigla = $_POST['Sigla'];  
    
		
		//comando que chama a variável criada no arquivo de conexão "$link" do bd e insere os dados na tabela indicada como nome de "controle" existente no banco de dados//
		//os campos não necessariamente precisam estar em ordem com o bd, mas todos devem existir e ter o mesmo nome//
		$result = mysqli_query($conect, "INSERT INTO 
    Curso(       
          nomeCurso,
          Modalidade,
          Area,
          Sigla) 
    VALUES (              
            '$nomeCurso',
            '$Modalidade',
            '$Area',
            '$Sigla')");
		

		if($result) {
			echo "<p> Dados cadastrados com sucesso!</p> <br>";
			//header('Location:index.php');	
           
		}

		else {
			echo "<p style='color:red;background:white;text-align:center' > Dados não cadastrados, motivo do erro: <br>" .mysqli_error($conect). "</p><br>";
		}		
		
	}
	//print_r ($conect);
    
    
?>

<Html>
    <a href="https://191.217.158.179:4443/semestre/formularios/turma">Turma</a>	
</Html>