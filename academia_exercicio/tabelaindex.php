<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Clientes</title>
  <!-- Importar Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <div class="col-6">
      <h1 class="text ml-4">Lista de Clientes</h1>
    </div>
    <div class="col-6">
    <a href="pagamento.php" class="btn btn-success float-right mr-2"><i class="fas fa-dollar-sign"></i></a>
    <a href="cadastro.php" class="btn btn-danger float-right mr-2"><i class="fas fa-plus"></i></a>
    </div>
  
  </div>
</div>

  
  <table class="table table-striped">
    <thead>
      <tr class="tabela">
        <th class="text-center">Nome</th>
        <th class="text-center">Telefone</th>
        <th class="text-center">Data de Cadastro</th>
        <th class="text-center">Data de Pagamento</th>
        <th class="text-center">Valor do Pagamento</th>
        <th class="text-center"></th>
       
       
      </tr>
    </thead>
    <tbody>
        
      <!-- dados da tabela -->
        <?php
        
        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "academia_maravilhas";

        // conexao bd
        $conn = new mysqli($server, $username, $password, $database);

        // erro
        if ($conn->connect_error) {
            die("Erro na conexão com o banco de dados: " . $conn->connect_error);
        }
        
       // sql
       $sql = "SELECT clientes.nome, clientes.telefone, clientes.dataCadastro, pagamento.dataPagamento, pagamento.valorPagamento FROM clientes INNER JOIN pagamento ON clientes.id = pagamento.codigoCliente ORDER BY clientes.nome";
        $result = $conn->query($sql);

        // exibir
        if ($result) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td class='text-center'>" . $row['nome'] . "</td>";
                  echo "<td class='text-center'>" . $row['telefone'] . "</td>";
                  echo "<td class='text-center'>" . $row['dataCadastro'] . "</td>";
                  echo "<td class='text-center'>" . $row['dataPagamento'] . "</td>";
                  echo "<td class='text-center'>" . $row['valorPagamento'] . "</td>";
                  echo "<td class='text-center'>
                          <a href='editarcliente.php' class='btn btn-primary'><i class='fas fa-pencil-alt'></i></a>
                          <a href='index.php' class='btn btn-danger'><i class='fas fa-trash'></i></a>
                        </td>";
                  echo "</tr>";
             
                }
            } else {
                echo "<tr><td colspan='6' class='text-center'>Nenhum cliente encontrado.</td></tr>";
            }
        } else {
            echo "Erro na consulta: " . $conn->error;
        }
        
        // fecha
        $conn->close();
        ?>        
      
    </tbody>
  </table>
</div>

<!-- Importar JavaScript do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
