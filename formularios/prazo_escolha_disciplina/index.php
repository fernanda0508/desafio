<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prazo de Escolha das Disciplinas</title>
  <!-- Incluindo o CSS do Bootstrap 5.3.3 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css" />
  <link href="/semestre/navbar/style.css" rel="stylesheet" />
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

      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <div class="card">
              <div class="card-body">
                <h2 class="card-title text-center">Prazo de Escolha das Disciplinas</h2>
                <form action="cadastrar.php" method="POST" enctype="multipart/form-data">

                  <div class="mb-3">
                    <label for="dataInicio" class="form-label">Data de início do Prazo</label>
                    <input type="date" class="form-control" id="dataInicio" name="dataInicio">
                  </div>
                  <div class="mb-3">
                    <label for="dataFim" class="form-label">Data de Fim do Prazo</label>
                    <input type="date" class="form-control" id="dataFim" name="dataFim">
                  </div>
                  <div class="mb-3">
                      <label for="turma" class="form-label"> Selecione a turma</label>
                      <select class="form-select" id="turma" name="turma">
                        <option value="" disabled selected hidden>Selecione</option>
                        <option value="opção 1">opção 1</option>
                        <option value="opção 2">opção 2</option>
                        <option value="opção 3">opção 3</option>
                      </select>
                     
                    
                  </div>
                
                  <button type="submit" name="submit" class="btn btn-dark w-100">Cadastrar</button>
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