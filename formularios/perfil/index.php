<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro de Professor</title>
  <!-- Incluindo o CSS do Bootstrap 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="styles.css" rel="stylesheet" />
  <link href="/semestre/navbar/style.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center">
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
      
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Editar Informações do Professor</h2>
            <form id="cadastroProfessor">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="matricula" class="form-label">Matrícula</label>
                  <input type="text" class="form-control" id="matricula" name="matricula" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="nome" class="form-label">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="senha" class="form-label">Senha</label>
                  <input type="password" class="form-control" id="senha" name="senha" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" />
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="dataIngresso" class="form-label">Data de Ingresso no IFRO</label>
                  <input type="date" class="form-control" id="dataIngresso" name="dataIngresso" />
                </div>
                <div class="col-md-6 mb-3">
                  <label for="nivelFormacao" class="form-label">Nível de Formação</label>
                  <select class="form-select" id="nivelFormacao" name="nivelFormacao">
                    <option value="graduacao">Graduação</option>
                    <option value="graduacao">Especialização</option>
                    <option value="mestrado">Mestrado</option>
                    <option value="doutorado">Doutorado</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="funcao" class="form-label">Função</label>
                  <select class="form-select" id="funcao" name="funcao">
                    <option value="professor">Professor (Somente)</option>
                    <option value="coordenador">Prof. Coordenador</option>
                    <option value="administrador">Administrador</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="areaEspecializacao" class="form-label">Área de Especialização</label>
                  <input type="text" class="form-control" id="areaEspecializacao" name="areaEspecializacao" />
                </div>
                <!-- <div class="col mb-3">
                    <label for="areaPreferida" class="form-label">Área de Preferencia</label>
                    <select class="form-select" id="areaPreferida" name="areaPreferida">
                      <option value="analise">Análise</option>
                      <option value="desenvolvimento">Desenvolvimento</option>
                      <option value="hardware">Hardware</option>
                    </select>
                  </div> -->
              </div>
              <!-- <div class="mb-3">
                <label for="areaAtuacao" class="form-label">Área de Atuação</label>
                <input type="text" class="form-control" id="areaAtuacao" name="areaAtuacao">
              </div> -->
              <button type="submit" class="btn btn-dark">Atualizar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- <script src="script.js"></script> -->
  <script src="/semestre/navbar/navbar.js"></script>
  <!-- Incluindo o JavaScript do Bootstrap 5.3.3 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>