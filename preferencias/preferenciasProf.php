<?php 

//consulta bando de dados Disciplina_turma
//geração dinâmica das tabelas
//condições de envio da escolhas do professor
	
/*	session_start();

	include_once('conect.php');
	
	//imprime na tela os dados da seção email e senha para testar se ok
	//print_r($_SESSION);

	//cria seções para acessar somente logado as páginas
	if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
	{
		//não existindo a session destruir os dados de email e senha
	 	unset($_SESSION['email']);
	 	unset($_SESSION['senha']);
	 	
	 	//não existindo a session redirecionar usuário para index.php
	 	header('Location: index.php');
	}
	 	$logado = $_SESSION['email'];
*/

include('/var/www/html/semestre/classes/conect.php'); 
	 	//cria os parâmetros para o sistema de pesquisa, recebe o dado digitado no campo search da URL e analisa
	if (!empty($_GET['search'])) {
			
            //criar a variavel data, recebe via GET (da URL) o dado;
		$data = $_GET['search'];
		 	
		// faz a consulta conforme o dado recebido na var $data e organiza por id
		$sql = "SELECT 
            Turma.ID_Turma,
            Turma.nomeCurso,
            Turma.Periodo_Atual,
            Turma.Turno,
            Disciplina.Nome AS Nome_Disciplina,
            Disciplina.Ch_Semanal_Disc,
            Professor.Nome AS Nome_Professor,
            Curso.Modalidade,
            Curso.nomeCurso AS curso
        FROM 
            Turma
        INNER JOIN 
            Disciplina_Turma ON Turma.ID_Turma = Disciplina_Turma.FK_Turma
        INNER JOIN 
            Disciplina ON Disciplina_Turma.FK_Disciplina = Disciplina.ID_Disciplina
        INNER JOIN 
            Professor ON Disciplina_Turma.FK_Professor = Professor.ID_Professor
        INNER JOIN 
            Curso ON Turma.FK_Curso = Curso.ID_Curso
        WHERE 
            Turma.ID_Turma LIKE '%$data%' 
            OR Turma.nomeCurso LIKE '%$data%'  
            OR Turma.Periodo_Atual LIKE '%$data%' 
			OR Turma.Turno LIKE '%$data%' 
            OR Disciplina.Nome LIKE '%$data%'
            OR Disciplina.Ch_Semanal_Disc LIKE '%$data%' 
            OR Professor.Nome LIKE '%$data%'
            OR Curso.Modalidade LIKE '%$data%' 
            OR Curso.nomeCurso LIKE '%$data%'  
			
        ORDER BY 
            Turma.nomeCurso DESC";			
		}
		else 
		{
		//lista todas as consultas do bd, os comandos php dentro de cada  nos inputs escrevem no navegador:
		 	
			/*
			$sql1 = "SELECT Nome, Carga_Horaria_Semanal
				FROM Disciplina # tabela1
				JOIN Disciplina_Turma ## relaciona com tabela2
				ON Disciplina.ID_Disciplina = Disciplina_Turma.FK_Disciplina ## valores em comum
				ORDER BY ID_Disciplina DESC";
			*/
			/*$sql = "SELECT nomeCurso, Sigla
				FROM Curso # tabela1
				JOIN Turma # relacionada com tabela2 prolema
				ON Curso.ID_Curso = Turma.FK_Curso # valores em comum problema
				ORDER BY nomeCurso DESC";
			*/
			//Associando várias tabelas e indicando campos necessários e condições
			/*$sql = "SELECT nomeCurso, Periodo_Atual, Turno, Nome, Ch_Semanal_Disc
			FROM Turma # tabela1
			INNER JOIN Disciplina_Turma # relacionada com tabela2 
			ON Turma.ID_Turma = Disciplina_Turma.FK_Turma # valores em comum problema
			INNER JOIN Disciplina ## INNER JOIN funciona como END
			ON Disciplina.ID_Disciplina = Disciplina_Turma.FK_Disciplina ## valores em comum
			ORDER BY nomeCurso DESC";*/

		$sql = "SELECT 
			Turma.ID_Turma,
			Turma.nomeCurso,
			Turma.Periodo_Atual,
			Turma.Turno,
			Disciplina.Nome AS Nome_Disciplina,
			Disciplina.Ch_Semanal_Disc,
			Professor.Nome AS Nome_Professor,
			Curso.Modalidade,
			Curso.nomeCurso AS curso			
		FROM 
			Turma
		INNER JOIN 
			Disciplina_Turma ON Turma.ID_Turma = Disciplina_Turma.FK_Turma
		INNER JOIN 
			Disciplina ON Disciplina_Turma.FK_Disciplina = Disciplina.ID_Disciplina
		INNER JOIN 
			Professor ON Disciplina_Turma.FK_Professor = Professor.ID_Professor
		INNER JOIN 
			Curso ON Turma.FK_Curso = Curso.ID_Curso		
		ORDER BY 
			Turma.nomeCurso DESC";

		}

	 
	 	$result = mysqli_query($conect,$sql);

		//print lista os resultados do selec no bd na parte superior da página
	 	//print_r($result);
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>sistema</title>
	 
		<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		-->
		<!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script> -->
		
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		
	  <link rel="stylesheet" type="text/css" href="tab_armas.css">

	</head>


<body >	
				
	<br>
			<div class="pesquisar">
				<input type="search" name="pesquisa" placeholder="Pesquisar" id="pesquisar">
				
				<button onclick="searchData()" class="btn btn-primary" >
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
					</svg>
				</button>
			</div>

	<div class="celulas" >		
		<table class="table tb-bg" >
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Professor</th>
			      <th class="td3" scope="col">Disciplina</th>
				  <th class="td3" scope="col">ChSem</th>
				  <th class="td3" scope="col">Período</th>
				  <th class="td3" scope="col">Turno</th>
				  <th class="td3" scope="col">Sigla</th>
				  <th class="td3" scope="col">Curso</th>
			      
				
				  <th class="td3" scope="col">Modalidade</th>
			      <!--<th class="td3" scope="col">Modelo</th>			      
			      <th class="td3" scope="col">Calibre</th>
			      <th scope="col">Editar</th>
				  <th scope="col">Qrcode</th>
				  <th scope="col">Deletar</th>
        -->
			    </tr>
			  </thead>
			  
			  <tbody>			   		
					<?php			   		
					//laço de repetição, bloco de códido deve ser repetido se verdadeiro: cria as linhas da tabela do banco
			   		while($bd_armas = mysqli_fetch_assoc($result)) 
			   		{

			   			echo "<tr>";
                       
						echo "<td >".$bd_armas['ID_Turma']."</td>";
						echo "<td >".$bd_armas['Nome_Professor']."</td>"; //disciplina
						echo "<td >".$bd_armas['Nome_Disciplina']."</td>"; //disciplina													
						echo "<td >".$bd_armas['Ch_Semanal_Disc']."</td>";
						echo "<td >".$bd_armas['Periodo_Atual']."</td>";
						echo "<td >".$bd_armas['Turno']."</td>";
						echo "<td >".$bd_armas['nomeCurso']."</td>";
						echo "<td >".$bd_armas['curso']."</td>";
						echo "<td >".$bd_armas['Modalidade']."</td>";															
						
						

			   			//echo "<td >".$bd_armas['Periodo_Atual']."</td>";
			   			//echo "<td class='td3'>".$bd_armas['Turno']."</td>";			   			
			   			
			   			//O href='edit.php?id=$user_data[id]' chama pelo id os dados da tabala

						//exibe o icone e configurações para editar registros do BD			   			
			   			echo "<td title='editar'>

			   					<a class='btn btn-sm btn-primary' href='edit_tab_armas.php?id=$bd_armas[id]'>
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
								  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
								</svg>
								</a>
							</td>";

						//exibe o icone e oconfigurações para gerar o qrcode por registros do BD
						/*echo "<td title='Qrcode'>
							<button class='btn btn-sm btn-primary' onclick='gerarqrcode2(".$bd_armas['id'].")'>
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-qr-code' viewBox='0 0 16 16'>
						 		 <path d='M2 2h2v2H2V2Z'/>
								 <path d='M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z'/>
						 		 <path d='M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z'/>
								 <path d='M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z'/>
						  			<path d='M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z'/>
								</svg>

							</button>
							</td>";
						*/
						echo "<td title='Qrcode'>
							<a class='btn btn-sm btn-primary' href='etiqueta_armas.php'>
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-qr-code' viewBox='0 0 16 16'>
						 		 <path d='M2 2h2v2H2V2Z'/>
								 <path d='M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z'/>
						 		 <path d='M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z'/>
								 <path d='M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z'/>
						  			<path d='M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z'/>
								</svg>

							</a>
							</td>";

						//exibe as configurações e o icone de deletar arquivos
						echo "<td title='deletar'>
								<a class='btn btn-sm btn-danger' href='tab_armas_del.php?id=$bd_armas[id]'>
								<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
								  <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
								  <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
								</svg>
								</a>
							</td>";

						echo "</tr>";
						echo "<img id='qrcodimage'>";					
			   		}
			   		?>
			   		<script src="./script2.js"></script>
			  </tbody>
		</table>
	</div>
</body>

	




</html>


