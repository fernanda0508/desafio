<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Cursos</title>
  <!-- Incluindo o CSS do Bootstrap 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/semestre/style/style.css" rel="stylesheet">
  <link href="/semestre/navbar/style.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar inicial  -->
  <div id="navbar-placeholder"></div>

  <div class="container mt-5">
    <div class="row" style="margin-top: 7rem;">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Incluir disciplinas na Turma</h2>

            <?php 
            $dadosTurma = mysqli_query($conect, "SELECT * FROM Turma");
            $dadosDisciplina = mysqli_query($conect, "SELECT * FROM Disciplina");
            
            ?>
            
            <form action="cadastrar.php" method="POST" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nome" class="form-label">Nome da Turma</label>
                  
                  <select class="form-select" id="curso" name="FK_Turma">
                  
                    <?php 
                    
                    include('/var/www/html/semestre/classes/conect.php');                       
                        //monta a consulta no banco
                        $sql = "SELECT * FROM Turma";
                        //executa a consulta
                        $result = mysqli_query($conect,$sql);

                        //Exibir os dados listados
                            while($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" .$row['ID_Turma']. "'>" . $row['nomeCurso'] .' '. $row['Periodo_Atual'] .' '. $row['Turno']. "</option>";
                            }

                        //fechar conexão com o banco
                            mysqli_close($conect);                   
                ?> 
                </select><br>                  
                  
                 <!-- <select class="form-select" id="curso" name="FK_Turma">
                    <option value="" disabled selected hidden>Selecione o turno</option>
                    <option value="ADS">ADS</option>
                    <option value="MSI">MSI</option>
                    <option value="ENG">ENG</option>
                    <option value="POS">POS</option>
                  </select>
                -->
                </div>
                <div class="col-md-6 mb-3">
                  <label for="area" class="form-label">Disciplina</label>
                  
                  <select class="form-select" id="FK_Disciplina" name="FK_Disciplina">
                  
                  <?php 
                  
                  include('/var/www/html/semestre/classes/conect.php');                       
                      //monta a consulta no banco
                      $sql = "SELECT * FROM Disciplina";
                      //executa a consulta
                      $result2 = mysqli_query($conect,$sql);

                      //Exibir os dados listados
                          while($row = mysqli_fetch_assoc($result2)) {
                              echo "<option value='" .$row['ID_Disciplina']. "'>" . $row['Nome'] .' '. $row['Carga_Horaria_Semestral'] .'h'."</option>";
                          }

                      //fechar conexão com o banco
                          mysqli_close($conect);                   
              ?> 
              </select><br>                               
                 
                 <!--
                  <select class="form-select" id="FK_Disciplina" name="FK_Disciplina">
                    <option value="" disabled selected hidden>Selecione a disciplina</option>
                    <option value="Lógica de Programação">Lógica de Programação</option>                    
                    <option value="Sistemas Operacionais">Sistemas Operacionais</option>
                    <option value="Redes de Computadores">Redes de Computadores</option>
                    <option value="Algoritmos">Algoritmos</option>
                  </select>
                -->
                
                </div>
            
              </div>
              </div>

              <div>
              
                <div class="col-md-6 mb-3" style="text-align: center;">
                  <br><button type="submit" class="btn btn-dark">Cadastrar</button></br>
                </div>
              </div>
            </form>


            
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="/semestre/navbar/navbar.js"></script>
  <!-- Incluindo o JavaScript do Bootstrap 5.3.3 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>