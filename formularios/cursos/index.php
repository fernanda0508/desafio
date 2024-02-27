<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Cursos</title>
  <!-- Incluindo o CSS do Bootstrap 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="/style/style.css" rel="stylesheet">
  <link href="/semestre/navbar/style.css" rel="stylesheet" />
</head>

<body class="fixed-nav sticky-footer mt-0" id="page-top">
  <!-- Navbar inicial  -->
  <div id="navbar-placeholder"></div>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Icon Cards-->
      <div class="row" style="margin-top: 1rem;">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fas"></i><img width="120" height="120" src="https://img.icons8.com/stickers/120/captain-america.png" alt="captain-america"/></i>
              </div>
              <div class="mr-3" style="margin-right: 4rem !important; font-weight: bold;font-size: 20px;">O MELHOR</div>
          
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
              <div class="mr-5" style="margin-right: 4rem !important; font-weight: bold;font-size: 20px;">CURSO SEMPRE</div>
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
              <div class="mr-5" style="margin-right: 4rem !important; font-weight: bold;font-size: 18px;">SERÁ O DE </div>
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
              <div class="mr-5"  style="margin-right: 4rem !important; font-weight: bold;font-size: 18px;">A.D.S</div>
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

  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Cadastrar Cursos</h2>
            
            <form action="cadastrar.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nome" class="form-label">Nome do Curso</label>
                  <select class="form-select" id="nomeCurso" name="nomeCurso">
                    <option value="" disabled selected hidden>Selecione</option>
                    <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                    <option value="Manutenção e Suporte em Informática">Manutenção e Suporte em Informática</option>  
                    <option value="Engenharia de Controle e Automação">Engenharia de Controle e Automação</option>
                    <option value="Técnico em Informática">Técnico em Informática</option>
                    <option value="Engenharia Civil">Engenharia Civil</option>                    
                    <option value="Edificações">Edificações</option>
                  </select>

                </div>
                <div class="col-md-6 mb-3">
                  <label for="area" class="form-label">Área</label>
                  <select class="form-select" id="Area" name="Area">
                    <option value="" disabled selected hidden>Selecione</option>
                    <option value="Informática">Informática</option>
                    <option value="outra">outra</option>  
                   
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="modalidade" class="form-label"> Sigla Curso</label>
                  <select class="form-select" id="Sigla" name="Sigla">
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
                  
                  <label for="cargaHorariaTotal" class="form-label">Nível ou modalidade</label>
                  <select class="form-select" id="Modalidade" name="Modalidade">
                    <option value="" disabled selected hidden>Selecione</option>
                    <option value="Subsequente ao EM">Subsequente ao EM</option>
                    <option value="Integrado ao EM">Integrado ao EM</option>
                    <option value="Graduação">Graduação</option>
                    <option value="Pós-Graduação">Pós-Graduação</option>                    
                  </select>

                  <br><button name= "submit" type="submit" class="btn btn-dark">Cadastrar</button></br>
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