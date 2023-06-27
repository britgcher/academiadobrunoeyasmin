<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- IMPORT BOOTSTRAP  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <!-- IMPORT CSS PERSONALIZADO -->
    <link rel="stylesheet" href="./assets/scss/main.scss">
</head>
<body>

<nav class="navbar bg-body-tertiary mb-4">
  <div class="container-fluid d-flex justify-content-center">
    <span class="navbar h1 text-center">Academia das Maravilhas</span>
  </div>
</nav>


<form> 
<div class="row justify-content-center">
    
    <div class="form-group col-4">
    <h1 class="mb-4 text-center" id="titulo_cad">Dados Pessoais</h1>
        
         <label class="m-2" for="exampleInputEmail1">Nome do Cliente</label>
        <input type="email" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="">
        
        <label class="m-2" for="exampleInputTelefone1">Telefone do Cliente</label>
        <input type="tel" class="form-control" id="telefone" placeholder="">
        
        <label class="m-2" for="exampleInputDataCadastro1">Data de Cadastro</label>
        <input type="date" class="form-control" id="dataCadastro" placeholder="">

        <div class="row justify-content-center">
    <div class="col-4 text-center">
        <a href="index.php" class="btn btn-success mt-4">Cadastrar</a>
    </div>
</div>

    </div>
    </div>
</div>
</form>


<!-- IMPORT JS BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>


</body>
</html>
