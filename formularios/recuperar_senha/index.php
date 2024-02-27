
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recuperar Senha</title>
    <!-- Incluindo o CSS do Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet"/>
    <link href="styles.css" rel="stylesheet" />
  </head>

  <body class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-body">
              <h2 class="card-title text-center">Recuperar Senha</h2>
              <form id="RecuperarSenha">
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="nome" class="form-label">Email</label>
                    <input type="text" class="form-control" id="Email" name="email" placeholder="Email Cadastrado">
  
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="d-flex justify-content-start">
                      <br><button type="submit" class="btn btn-dark">Enviar</button></br>
                      
                  </div>
                </div>
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
