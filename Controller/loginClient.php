<?php include_once "../Model/Usuario.php"; // Inclusão do arquivo para fazer a logagem; ?>
<?php include_once "cookie.php"; // Inclusão do arquivo para o site ter cookies; ?>

<?php

    // HtmlVars =  Recebimento das variáveis do HTML que veem do arquivo: ../View/Html/Login.html
    $user =    filter_input(INPUT_POST, 'logi', FILTER_SANITIZE_STRING);
    $pass =   filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $sql = "SELECT logi,senha FROM nspaceuser WHERE logi = '$user'";

    // Instância da classe User
    $usuario = new User();
    $usuario->Logar($sql, $user, $pass); //Método que faz o login do usuario