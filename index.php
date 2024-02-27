


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="login/styles/styles.css" />
</head>
<body class="bg-light">
  <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card p-4 shadow" style="max-width: 400px;">
      
    <form action="login.php" method="POST" enctype="multipart/form-data">
        <div class="mb-4 text-center">
          <img src="./login/img/logo.jpg" class="mb-2" style="width: 70px;">
          <h2>Login</h2>
        </div>
        <div class="mb-3">
          <label for="matricula" class="form-label">Email:</label>
          <input type="text" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
          <label for="senha" class="form-label">Senha:</label>
          <input type="password" class="form-control" id="senha" name="senha">
        </div>
        
        <button type="submit" name="submit" class="btn btn-dark w-100 ">Fazer Login</button>
        <div class="text-center mt-3">
          <a href="https://191.217.158.179:4443/semestre/formularios/senha/" id="forgotPassword" class="text-decoration-none" style="color:black";>Esqueceu a Senha?</a>
          <br><a href="https://191.217.158.179:4443/semestre/formularios/cadastro/index.php" id="cadastro" class="text-decoration-none" style="color:black;">Cadastre-se</a></br>
        </div>

    
        
      </form>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
