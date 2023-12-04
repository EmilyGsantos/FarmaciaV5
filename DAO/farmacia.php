<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../style.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"><!--Link Roboto-->
    <title>Cadastro de Clientes - Farmácias A, B, C, D</title>
</head>
<body>
    <header><nav></nav></header><br>
    <h1 id="h1-farm">Cadastro de Clientes</h1><br><br>
    <img class="cad-img" src="../Logo.png" alt="logo da farmácia">
    <form id="cad" action="processa_cadastro.php" method="post"><br><br>
    <label for="nome">Nome Completo:</label><br>
        <input type="text" id="nome" name="nome"><br>
 
        <br><label for="rg">RG:</label><br>
        <input type="text" id="rg" name="rg"><br>
 
        <br><label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br>
 
        <br><label for="plano_saude">Plano de Saúde:</label><br>
        Sim <input type="radio" name="plano_saude" value="Sim">
        Não <input type="radio" name="plano_saude" value="Não"><br>
 
        <br><label for="qual_plano">Qual Plano?</label><br>
        <select id="qual_plano" name="qual_plano">
            <option value="Nenhum">Nenhum</option>
            <option value="Amil">Amil</option>
            <option value="Sulamérica">Sulamérica</option>
            <option value="Santa Helena">Santa Helena</option>
        </select><br>
 
        <br><label for="farmacia_popular">Uso de Farmácia Popular:</label><br><br>
        Sim <input type="radio" name="farmacia_popular" value="Sim">
        Não <input type="radio" name="farmacia_popular" value="Não"><br>
 
        <br><label for="qual_produto">Qual Produto?</label><br><br>
        <select id="qual_produto" name="qual_produto">
            <option value="Nenhum">Nenhum</option>
            <option value="DorFlex">DorFlex</option>
            <option value="Glifage">Glifage</option>
            <option value="Fluoxetina">Fluoxetina</option>
        </select><br>
 
        <br><label for="farmacia">Escolha a Farmácia:</label><br><br>
        A <input type="radio" name="farmacia" value="A">
        B <input type="radio" name="farmacia" value="B">
        C <input type="radio" name="farmacia" value="C">
        D <input type="radio" name="farmacia" value="D"><br>

        <br><input type="submit" value="Cadastrar"><br>

        <br><button class="bnt-cad"><a class="a-index" href="../index.php">Voltar</a></button><br>
    </form>
</body>
</html>