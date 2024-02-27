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

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="card">
          <div class="card-body">
            <h2 class="card-title text-center">Atualizar Cursos</h2>
            <form action="atualizar.php" method="POST" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <label for="nome" class="form-label">Nome do Curso</label>
                  <select class="form-select" id="nomeCurso" name="nomeCurso">
                    <option value="Análise e Desenvolvimento de Sistemas" selected>Análise e Desenvolvimento de Sistemas
                    </option>
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

                    <option value="Informática" selected>Informática</option>
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
                    <option value="ADS" selected>ADS</option>
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
                    <option value="Graduação" selected>Graduação</option>
                    <option value="Pós-Graduação">Pós-Graduação</option>
                  </select>

                  <br><button name="submit" type="submit" class="btn btn-dark">Cadastrar</button></br>
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