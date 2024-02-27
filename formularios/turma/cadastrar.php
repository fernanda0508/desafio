<?php

include('/var/www/html/semestre/classes/conect.php');
//include('./conect.php'); //se estivre na mesma pasta html

	if(isset($_POST['submit']))
	{
	// os comandos abaixo servem para testar se o html está escrevendo o envio de dados na tela//    
   /* 
    print_r($_POST['nomeCurso']);
    print_r($_POST['inicioSemestre']);
    print_r($_POST['fimSemestre']);
    print_r($_POST['Periodo_Atual']);    
    print_r($_POST['Carga_Horaria_Semanal']);    
    print_r($_POST['Turno']);    
  */
  include('/var/www/html/semestre/classes/conect.php');
   		
		//os nomes das variáveis abaixo devem ser idênticas com as que estão no banco de dados para envio//
		$nomeCurso = $_POST['nomeCurso'];
    $inicioSemestre = $_POST['inicioSemestre'];
    $fimSemestre = $_POST['fimSemestre'];
    $Periodo_Atual = $_POST['Periodo_Atual'];  
    $Carga_Horaria_Semanal = $_POST['Carga_Horaria_Semanal'];  
    $Turno = $_POST['Turno'];  
    $prof = 1;
    $curso = 2;
    $FK_curso;
  
    
		
		//comando que chama a variável criada no arquivo de conexão "$link" do bd e insere os dados na tabela indicada como nome de "controle" existente no banco de dados//
		//os campos não necessariamente precisam estar em ordem com o bd, mas todos devem existir e ter o mesmo nome//
		$result = mysqli_query($conect, "INSERT INTO 
    
    Turma(  
            ID_Turma,
            nomeCurso,
            inicioSemestre,
            fimSemestre,
            Periodo_Atual,
            Carga_Horaria_Semanal,
            Turno) 
    VALUES ( null,    
            '$nomeCurso',
            '$inicioSemestre',
            '$fimSemestre',
            '$Periodo_Atual',
            '$Carga_Horaria_Semanal',
            '$Turno')");
		

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

