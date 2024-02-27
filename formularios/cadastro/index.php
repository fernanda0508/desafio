
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Professor</title>
  <!-- Incluindo o CSS do Bootstrap 5.3.3 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet" />
</head>

<body class="d-flex align-items-center">

  
  <!-- Navbar inicial  -->
  <div id="navbar-placeholder"></div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-5 offset-md-3">
        <div id="form-cadastro" class="card shadow-lg ">
          <div  class="card-body">
            <div class="mb-4 text-center">
              <img src="/semestre/login/img/logo.jpg" class="mb-2" style="width: 90px;">
            </div>
            <h2 class="card-title text-center">Cadastrar-se</h2>
            
            <form action="cadastrar.php" method="POST" enctype="multipart/form-data">
             
              
              <!-- Campo Matrícula -->
              <div class="mb-3">
                <label for="matricula" class="form-label">Matrícula</label>
                <input type="text" class="form-control" id="matricula" name="matricula">
              </div>

              <!-- Campo Nome -->
              <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome">
              </div>

              <!-- Campo Senha -->
              <div class="mb-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha">
              </div>

              <!-- Campo Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
              </div>

              <!-- Campo Data de Ingresso -->
              <div class="mb-3">
                <label for="dataIngresso" class="form-label">Data de Ingresso no IFRO</label>
                <input type="date" class="form-control" id="dataIngresso" name="dataIngresso">
              </div>

              <!-- Campo Nível de Formação -->
              <div class="mb-3">
                <label for="nivelFormacao" class="form-label">Nível de Formação</label>
                <select class="form-select" id="nivelFormacao" name="nivelFormacao">
                  <option value="Graduação">Graduação</option>
                  <option value="Especialização">Especialização</option>
                  <option value="Mestrado">Mestrado</option>
                  <option value="Doutorado">Doutorado</option>
                </select>
              </div>

              <!-- Campo Função -->
              <div class="mb-3">
                <label for="funcao" class="form-label">Função</label>
                <select class="form-select" id="funcao" name="funcao">
                  <option value="professor">Professor (Somente)</option>
                  <option value="coordenador">Prof. Coordenador</option>
                  <option value="administrador">Administrador</option>
                </select>
              </div>

              <!-- Campo Área de Especialização -->
              <div class="mb-3">
                <label for="areaEspecializacao" class="form-label">Área de Especialização</label>
                <input type="text" class="form-control" id="areaEspecializacao" name="areaEspecializacao">
              </div>

              <!-- Botão de envio -->
              <button id="enviar" type="submit" name="submit" class="btn btn-dark">Cadastrar</button>
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
  <!-- Incluindo o JavaScript do Bootstrap 5.3.3 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>