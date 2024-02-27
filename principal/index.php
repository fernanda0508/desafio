<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal</title>
  <!-- Incluindo o CSS do Bootstrap 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="/semestre/navbar/style.css" rel="stylesheet" />
  <!-- Importando Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
              <div class="mr-5 data-abertura" style="margin-right: 4rem !important; font-weight: bold;font-size: 18px;">Data de abertura: </div>
              <div class="mr-5 data-fechamento" style="margin-right: 4rem !important; font-weight: bold;font-size: 18px;">Data de Final: </div>

              <!-- 
                  Exemplo das data em php:
                 <div class="data-abertura">Data de abertura: <?php echo date("d/m/Y", strtotime($eventos['data_abertura'])); ?></div>
                  <div class="data-fechamento">Data de Final: <?php echo date("d/m/Y", strtotime($eventos['data_fechamento'])); ?></div>
               -->
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Veja Aqui</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
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
              <div class="mr-5" style="margin-right: 4rem !important; font-weight: bold;font-size: 25px;">Escolha bem!!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Veja Aqui</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
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
              <div class="mr-3" style="margin-right: 4rem !important; font-weight: bold;font-size: 20px;">Pense na Opinião da turma!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Veja Aqui</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
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
              <div class="mr-5" style="margin-right: 4rem !important; font-weight: bold;font-size: 25px;">Fique atento ao prazo!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">Veja Aqui</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Fim cards-->

        <!-- Mensagem de boas vindas -->
        <div id="welcome-message">
          <p>Seja muito bem-vindo ao <span id="user-name">DisciPlan!</span></p>
        </div>
        <!-- End mensagem de boas vindas -->

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="/semestre/navbar/navbar.js"></script>
      <script src="fakeData.js"></script>

      <!-- Incluindo o JavaScript do Bootstrap 5.3.3 -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>