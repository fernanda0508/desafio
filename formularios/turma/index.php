<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Cursos</title>
  <!-- Incluindo o CSS do Bootstrap 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/style/style.css" rel="stylesheet">
  <link href="/semestre/navbar/style.css" rel="stylesheet"/>
</head>

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
              <div class="mr-3" style="margin-right: 4rem !important; font-weight: bold;font-size: 20px;">Lembre-se de anotar sua senha.</div>
          
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
              <div class="mr-5" style="margin-right: 4rem !important; font-weight: bold;font-size: 20px;">Escolha bem a sua senha!!</div>
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
              <div class="mr-5" style="margin-right: 4rem !important; font-weight: bold;font-size: 18px;">Escolhas difíceis requerem Determinação forte.</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left " style="font-weight: bold;font-size: 15px">Ass: Leandro Ferrarezi</span>
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
              <div class="mr-5"  style="margin-right: 4rem !important; font-weight: bold;font-size: 17px;">Com grandes poderes vêm grandes responsabilidades.</div>
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

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Cadastrar Turma</h2>
            
            <form action="cadastrar.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="modalidade" class="form-label"> Nome do Curso</label>
                  <select class="form-select" id="nomeCurso" name="nomeCurso">
                    <option value="" disabled selected hidden>Selecione</option>
                    <option value="ENG CIVIL">ENG CIVIL</option>
                    <option value="ENG AUTO">ENG AUTO</option>
                    <option value="ADS">ADS</option>
                    <option value="ECA">ECA</option>
                    <option value="MSI">MSI</option>
                    <option value="EDI">EDI</option>                    
                    <option value="TI">TI</option>
                  </select>
                 
                </div>
                <div class="col-md-6 mb-3">
                  <label for="area" class="form-label">Período atual</label>
                  
                  <select class="form-select" id="Periodo_Atual" name="Periodo_Atual">
                    <option value="" disabled selected hidden>Selecione o Período</option>
                    <option value="1º Período">1º Período</option>
                    <option value="2º Período">2º Período</option>
                    <option value="3º Período">3º Período</option>
                    <option value="4º Período">4º Período</option>
                    <option value="5º Período">5º Período</option>
                    <option value="6º Período">6º Período</option>
                    <option value="7º Período">7º Período</option>
                    <option value="8º Período">8º Período</option>
                    <option value="1º Ano">1º Ano</option>
                    <option value="2º Ano">2º Ano</option> 
                    <option value="3º Ano">3º Ano</option> 
                                      
                  </select>
                
                </div>
              </div>
              <div class="row">
                

                <div class="col-md-6 mb-3">
                  <label for="turno" class="form-label">Turno</label>
                  <select class="form-select" id="Turno" name="Turno">
                    <option value="" disabled selected hidden>Selecione o turno</option>
                    <option value="integral">Integral</option>
                    <option value="matutino">Matutino</option>
                    <option value="vespertino">Vespertino</option>
                    <option value="noturno">Noturno</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="semestre" class="form-label">Inicio do Semestre</label>
                  <input type="date" class="form-control" id="inicioSemestre" name="inicioSemestre">
                
                </div>
                
              </div>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="cargaHorariaSemanal" class="form-label">Carga Horária Semanal</label>
                  <select class="form-select" id="Carga_Horaria_Semanal" name="Carga_Horaria_Semanal">
                    <option value="" disabled selected hidden>Selecione</option>
                    <option value="06">06</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                  
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label for="fimSemestre" class="form-label">Fim do Semestre</label>
                  <input type="date" class="form-control" id="fimSemestre" name="fimSemestre">
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-3" style="text-align: center;">
                    <br><a class="btn btn-outline-dark" href="https://191.217.158.179:4443/semestre/formularios/turma_disciplina/">Incluir disciplinas</a></br>
                  </div> 
  
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