<?php 

session_start();
//consulta bando de dados Disciplina_turma
//geração dinâmica das tabelas
//condições de envio da escolhas do professor


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
            Curso.nomeCurso AS curso,
            Disciplina_Turma.ID_Disciplina_Turma
            

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
            OR Professor.Nome LIKE '%$data%'
            OR Disciplina.Nome LIKE '%$data%'
            OR Disciplina.Ch_Semanal_Disc LIKE '%$data%' 
            OR Turma.Periodo_Atual LIKE '%$data%' 
            OR Turma.Turno LIKE '%$data%' 
            OR Turma.nomeCurso LIKE '%$data%'  
            OR Curso.Modalidade LIKE '%$data%'   
            OR Disciplina_Turma.ID_Disciplina_Turma LIKE '%$data%'                       
            OR Curso.nomeCurso LIKE '%$data%'       
           			
        ORDER BY 
            Professor.Nome DESC";			
		}
		else 
		{
		
      // consulta gera relatório final 

  $sql = "SELECT 
      Disciplina_Turma.ID_Disciplina_Turma,
      Turma.ID_Turma,
      Turma.nomeCurso,
      Turma.Periodo_Atual,
      Turma.Turno,
      Disciplina.Nome AS Nome_Disciplina,
      Disciplina.Ch_Semanal_Disc,
      Professor.Nome AS Nome_Professor,
      Professor.ID_Professor,
      Curso.Modalidade,
      Curso.nomeCurso AS curso,
      Disciplina_Turma.FK_Professor	
    
    FROM 
    Turma
    INNER JOIN 
    Disciplina_Turma ON Turma.ID_Turma = Disciplina_Turma.FK_Turma
    INNER JOIN 
    Disciplina ON Disciplina_Turma.FK_Disciplina = Disciplina.ID_Disciplina
    INNER JOIN 
    Curso ON Turma.FK_Curso = Curso.ID_Curso	
    LEFT JOIN 
    Professor ON Disciplina_Turma.FK_Professor = Professor.ID_Professor	
    /*WHERE Disciplina_Turma.FK_Professor IS NULL*/
    ORDER BY 
    Nome_Professor DESC";

		}
	 
	 	$result = mysqli_query($conect,$sql);

		//print lista os resultados do selec no bd na parte superior da página
	 	//print_r($result);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Metadados e Links para CSS -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro de Professor</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="/semestre/navbar/style.css" rel="stylesheet" />
</head>
<!-- 
    Fluxo do Processo:
    1- O usuário seleciona disciplinas na primeira tabela.
    2- As disciplinas selecionadas são adicionadas à segunda tabela.
    3- Quando o usuário estiver satisfeito com suas seleções, ele clica no botão "Enviar Preferências".
    4- O botão ativa a submissão do formulário oculto, que envia os dados das disciplinas selecionadas para o servidor PHP.
   -->

<body>
  <!-- Navbar inicial  -->
  <div id="navbar-placeholder"></div>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Icon Cards-->
      <div class="row" style="margin-top: 4rem;">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas"></i><img width="120" height="120" src="https://img.icons8.com/stickers/120/captain-america.png" alt="captain-america"/></i>
              </div>
              <div class="mr-3" style="margin-right: 4rem !important; font-weight: bold;font-size: 17px;">Heróis são feitos de escolhas, não de poderes.</div>
          
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left " style="font-weight: bold;font-size: 15px">Ass: Cap. América</span>
              <!-- <span class="float-right"> 
              <i class="fa fa-angle-right"></i>
              </span> -->
            </a>
          </div>
        </div>

        <!-- Card 02 -->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw"><img width="120" height="120" src="https://img.icons8.com/doodle/480/iron-man.png" alt="iron-man"/></i>
              </div>
              <div class="mr-5" style="margin-right: 4rem !important; font-weight: bold;font-size: 17px;">Parte da jornada é o fim.</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left " style="font-weight: bold;font-size: 15px">Ass: Hom. de Ferro</span>
              <!-- <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span> -->
            </a>
          </div>


        </div>
        <!-- Card 03 -->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white o-hidden h-100" style="background-color: purple;">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw"><img width="120" height="120" src="https://img.icons8.com/color/120/thanos.png" alt="thanos"/></i>
              </div>
              <div class="mr-5" style="margin-right: 4rem !important; font-weight: bold;font-size: 17px;">Leandro, você não é o único amaldiçoado com a sabedoria.</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left " style="font-weight: bold;font-size: 15px">Ass: Thanos</span>
              <!-- <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span> -->
            </a>
          </div>
        </div>
        <!-- Card 04 -->
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw"><img width="120" height="120" src="https://img.icons8.com/color/120/spiderman-head.png" alt="spiderman-head"/></i>
              </div>
              <div class="mr-5"  style="margin-right: 4rem !important; font-weight: bold;font-size: 17px;">Às vezes a vida é um saco, mas sempre vale a pena viver!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left " style="font-weight: bold;font-size: 15px">Ass: Hom.-Aranha</span>
              <!-- <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span> -->
            </a>
          </div>
        </div>
      </div>
      <!-- Fim cards-->
      <!-- Container para a Tabela de Disciplinas Disponíveis -->
      <div class="container mt-5">
      <div>
      <h5>RELATÓRIO GERAL<h5>
      </div>
      <div class="pesquisar">

      <div class="d-flex align-items-center">
          <input class="form-control" style="height: 30px; width: auto; flex-grow: 1;" type="search" name="pesquisa" placeholder="Pesquisar" id="pesquisar">
          <button onclick="searchData()" class="btn btn-dark" style="height: 30px; margin-left: 5px;">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="30" fill="currentColor" class="bi bi-search" viewBox="0 7 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
          </button><br></br>
          
			</div>
     
			</div>
      
      <!-- Campo de pesquisa para filtrar as disciplinas 
        <input type="search" name="pesquisa" id="pesquisar" class="form-control mb-3"
          placeholder="Pesquisar por nome da disciplina ou turno" />
      -->
        
        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">Cod</th>
                <th scope="col">Professor</th>
                <th scope="col">Disciplina</th>
                <th scope="col">Ch Sema</th>
                <th scope="col">Período</th>
                <th scope="col">Turno</th>
                <th scope="col">Nome do Curso</th>
                <th scope="col">Modalidade</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody id="1tableBody">
              <!-- Linhas inseridas dinamicamente -->
              <tbody>			   		
					<?php			   		
					//laço de repetição, bloco de códido deve ser repetido se verdadeiro: cria as linhas da tabela do banco
			   		while($bd_dados = mysqli_fetch_assoc($result)) 
			   		{

			   		echo "<tr>";
                       
						echo "<td >".$bd_dados['ID_Disciplina_Turma']."</td>";
						echo "<td >".$bd_dados['Nome_Professor']."</td>"; //disciplina
						echo "<td >".$bd_dados['Nome_Disciplina']."</td>"; //disciplina													
						echo "<td >".$bd_dados['Ch_Semanal_Disc']."</td>";
						echo "<td >".$bd_dados['Periodo_Atual']."</td>";
						echo "<td >".$bd_dados['Turno']."</td>";
						//echo "<td >".$bd_armas['nomeCurso']."</td>";
						echo "<td >".$bd_dados['curso']."</td>";
						echo "<td >".$bd_dados['Modalidade']."</td>";														
											

			   		//exibe o icone e configurações para enviar a escolha aos registros do BD			   			
			   		echo "<td title='Remover professor'>
			   				<a class='btn btn-sm btn-primary' href='limparPrefProf.php?id=$bd_dados[ID_Disciplina_Turma]&id2=$bd_dados[ID_Professor]'>								
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
								  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
								  </svg>                  
								</a>
							</td>";										
						echo "</tr>";										
			   	}
			  ?>
			   		<script src="./script2.js"></script>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Disciplinas selecionadas pelo professor -->
      <div class="container mt-5">
        <h3>Disciplinas Selecionadas</h3>              

        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">Cod</th>
                <th scope="col">Disciplina</th>
                <th scope="col">Ch Sema</th>
                <th scope="col">Ch disc</th>
                <th scope="col">Turma</th>
                <th scope="col">Turno</th>
                <th scope="col">Modalidade</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            <tbody id="1tableBody">
              <!-- Linhas inseridas dinamicamente -->
              <tbody>			   		
					
        <!--EXIBER DADOS -->

    <?php			   		
					
        $sql2 = "SELECT 			
            Turma.nomeCurso,
            Turma.Periodo_Atual,
            Turma.Turno,
            Disciplina.Nome AS Nome_Disciplina,
            Disciplina.Ch_Semanal_Disc,
            Professor.Nome AS Nome_Professor,
            Curso.Modalidade,
            Curso.nomeCurso AS curso,
            Disciplina_Turma.ID_Disciplina_Turma,
            Disciplina_Turma.FK_Professor
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


      $result2 = mysqli_query($conect,$sql2);
          

//EXIBE ESCOLHAS DO PROFESSOR
    //Enquanto ID_user == ID Prof

  /*  
    if(($_SESSION['user_id'])== $bd_dados2['FK_Professor']){
      //laço de repetição, bloco de códido deve ser repetido se verdadeiro: cria as linhas da tabela do banco
			while($bd_dados2 = mysqli_fetch_assoc($result2)) {
        
			echo "<tr>";                       
      echo "<td >".$bd_dados2['FK_Professor']."</td>";
      echo "<td >".$bd_dados2['Nome_Professor']."</td>"; //disciplina
      echo "<td >".$bd_dados2['Nome_Disciplina']."</td>"; //disciplina													
      echo "<td >".$bd_dados2['Ch_Semanal_Disc']."</td>";
      echo "<td >".$bd_dados2['Periodo_Atual']."</td>";
      echo "<td >".$bd_dados2['Turno']."</td>";
    // echo "<td >".$bd_dados2['nomeCurso']."</td>";
      echo "<td >".$bd_dados2['curso']."</td>";
      echo "<td >".$bd_dados2['Modalidade']."</td>";											
											

		//exibe o icone e configurações para enviar a escolha aos registros do BD			   			
			   		echo "<td title='Enviar'>
			   				<a class='btn btn-sm btn-primary' href='gravaEscolha.php?id=$bd_dados[ID_Disciplina_Turma]&id2=$bd_dados[ID_Professor]'>								
                  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
								  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
								  </svg>                  
							</a>
					</td>";										
				echo "</tr>";										
			}
    }
  */

			  ?>

         



			   		<script src="./script2.js"></script>
            </tbody>
          </table>
        

      <!-- Modal para Confirmação da Seleção de Disciplina -->
      <div class="modal" tabindex="-1" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Confirmação de Envio</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Tem certeza que deseja selecionar esta disciplina ?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Não
              </button>
              <button type="button" class="btn btn-primary" id="confirmSelection" data-bs-dismiss="modal">
                Sim
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- Formulário Oculto para Envio de Dados -->
      <form id="formDisciplinas" action="seu_script_php.php" method="post" style="display: none">
        <input type="hidden" name="disciplinasSelecionadas" id="disciplinasSelecionadas" />
      </form>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

      <!-- Scripts JavaScript -->
      -
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="/semestre/preferencias/api.js"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="/semestre/navbar/navbar.js"></script>
</body>

<!-- o script abaixo permite mudar a URL, coletando o valor digitado no input, ele coleta quando clica-se no botão por meio do atributo onclick apontando para a fução searchData -->
<script>	
		var search = document.getElementById('pesquisar');
		
		//linhas abaixo permitem a pesquisa apertando enter
		search.addEventListener("keydown", function(event)
		{
			if(event.key === "Enter")
				{
					searchData();
				}
		});

		function searchData()
		{
			window.location = 'index.php?search='+search.value;
		}	
	</script>



</html>