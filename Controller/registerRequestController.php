<?php 
    include_once "../Model/Conexao.php"; // Inclusão do arquivo de Conexão com Db;
    include_once "../Model/Produto.php"; // Inclusão da classe do cliente;
?>

<?php

    // HtmlVars =  Recebem o valor do Html e trazem pro PHP para serem usadas
    $request =    filter_input(INPUT_POST, 'request', FILTER_SANITIZE_STRING); // Variável para receber o login do usuário
    $price =   filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING); // Variável para receber o email do usuário
    $descript = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING); // Variável para receber o celular do usuário

    // Solicitação para o cadastro do Cliente
    $sql = "INSERT INTO products(request, price, descript)VALUES('$request', '$price', '$descript')"; // Comando Sql para inserção de valores dentro dos dados das tabelas
    $product = new Produto(); // Instância da classe cliente
    $product->insert($sql, $request); // Metódo que faz a inserção de dados dentro do database