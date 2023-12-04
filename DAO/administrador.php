<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Rowdies&display=swap" rel="stylesheet"><!--Link fonte-->
    <title>Administrador</title>
</head>
<body>
<header>
         <nav></nav>
 </header>
 <h1 class="h1-adm">Administrador</h1><br><br><br>
 <img class="cad-img" src="../Logo.png" alt="logo da farmácia">
 <h3 class="h3-adm">Ranking de Cadastros</h3>
 <div>
 <br><button class="bnt-adm"><a class="a-adm" href="../index.php">Voltar</a></button><br>
 </div> <br><br>

<div class="ranking">
    <?php
    // Configurações de conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $dbname = "farmacia";
    
    // Cria uma conexão com o banco de dados (sem senha)
    $conn = new mysqli($servername, $username, '', $dbname);
    
    // Verificar a conexão com o banco de dados
    if ($conn->connect_error) {
        die("Falha na conexão com o banco de dados: " . $conn->connect_error);
    }
    
    // Consulta SQL para contar os cadastros de cada farmácia
    $sql = "SELECT farmacia, COUNT(*) as quantidade FROM cadastros GROUP BY farmacia";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Exibir a quantidade de cadastros de cada farmácia
        while ($row = $result->fetch_assoc()) {
            $farmacia = $row["farmacia"];
            $quantidade = $row["quantidade"];
            echo "Farmácia $farmacia: $quantidade cadastros<br>";
        }
    } else {
        echo "Nenhum cadastro encontrado.";
    }
    
    // Fechar a conexão com o banco de dados
    $conn->close();
    ?>
</div>



</body>
</html>


