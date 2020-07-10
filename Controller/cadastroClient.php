<?php 
    include_once "../Model/Conexao.php"; // Inclusão do arquivo de Conexão com Db;
    include_once "../Model/Cliente.php"; // Inclusão da classe do cliente;
?>

<?php

    // HtmlVars =  Recebem o valor do Html e trazem pro PHP para serem usadas
    $user =    filter_input(INPUT_POST, 'logi', FILTER_SANITIZE_STRING); // Variável para receber o login do usuário
    $mail =   filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING); // Variável para receber o email do usuário
    $cell = filter_input(INPUT_POST, 'celular', FILTER_SANITIZE_STRING); // Variável para receber o celular do usuário
    $pass =   filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING); // Variável para receber a senha do usuário 

    // Solicitação para o cadastro do Cliente
    $sql = "INSERT INTO nspaceuser(logi, senha, celular, email)VALUES('$user', '$pass', '$cell', '$mail')"; // Comando Sql para inserção de valores dentro dos dados das tabelas
    $client = new Cliente(); // Instância da classe cliente
    $client->insert($sql); // Metódo que faz a inserção de dados dentro do database