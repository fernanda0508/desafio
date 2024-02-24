<?php

include('/var/www/html/semestre/classes/conect.php');
//include('./conect.php'); //se estivre na mesma pasta html

	if(isset($_POST['submit']))
	{
	// os comandos abaixo servem para testar se o html está escrevendo o envio de dados na tela//
  /*  
    print_r($_POST['nome']);
    print_r($_POST['matricula']);
    print_r($_POST['email']);
    print_r($_POST['senha']);
    print_r($_POST['nivelFormacao']);
    print_r($_POST['areaEspecializacao']);
    print_r($_POST['funcao']);
    print_r($areaAtuacao); 
    print_r($_POST['dataIngresso']);
    echo $cargaHorariaSemanal;
    echo $funcao1;
    echo $funcao2;
    echo $funcao3;
  */ 
        
	//inclui uma vez o arquivo de conexão ao banco//
	//include_once('classes/conect.php');
	
		
		//os nomes das variáveis abaixo devem ser idênticas com as que estão no banco de dados para envio//
		$nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
		
    $nivelFormacao = $_POST['nivelFormacao'];
    $areaEspecializacao = $_POST['areaEspecializacao'];
    $areaAtuacao = "Informatica";


    if(($_POST['funcao']) == 'coordenador') {
      $cargaHorariaSemanal = 10;
    } else { 
      $cargaHorariaSemanal = 16;
    }
        $funcao1 = 0;
        $funcao2 = 0;
        $funcao3 = 0;
		
		$dataIngresso = $_POST['dataIngresso'];
		
      switch($_POST['funcao']) {
        case 'administrador': $funcao1 = 1;
        break;
        case 'coordenador': $funcao2 = 1;
        break;
        case 'professor': $funcao3 = 1;
        break;
        default:        
        $funcao3 = 1;
    }    
    
	
		
		//comando que chama a variável criada no arquivo de conexão "$link" do bd e insere os dados na tabela indicada como nome de "controle" existente no banco de dados//
		//os campos não necessariamente precisam estar em ordem com o bd, mas todos devem existir e ter o mesmo nome//
		$result = mysqli_query($conect, "INSERT INTO 
    Professor(
              ID_Professor,
              Nome,
              Matricula,
              Email,
              Senha,
              Nivel_Formacao,
              Area_Especializacao,
              Area_Atuacao,
              ch_sem,
              Data_ingresso,
              Adm,
              Coord,
              Prof) 
    VALUES (
            null,
            '$nome',
            '$matricula',
            '$email',
            '$senha',
            '$nivelFormacao',
            '$areaEspecializacao',
            '$areaAtuacao',
            '$cargaHorariaSemanal',
            '$dataIngresso',
            '$funcao1',      
            '$funcao2',
            '$funcao3')");
		

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
    <a href="https://191.217.158.179:4443/semestre/">Acessar</a>	
</Html>