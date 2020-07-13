<?php
include "Conexao.php";
    class User extends Conexao{

        // Método para logar no site
        public function Logar($query, $user, $pass){// Método para logar, passados os parâmetros da query, usuario e a senha, que estão no arquivo 'LoginClient.php

            $this->connect();// Método para conectar, previsto na classe principal "Conexão.php"
            $this->query = $this->mysqli->query($query);// Solicitação
            $this->disconnect();// Método para desconectar do Banco

            $bancoArray = mysqli_fetch_array($this->query);// Criação de um vetor para adquirir os valores do banco;
            $bancoUser = $bancoArray[0];// $BancoUser vai receber o valor do vetor na posição [0];
            $bancoPass = $bancoArray[1];// $BancoPass vai receber o valor do vetor na posição [1];

            // Se as variáveis do banco que contém os valores de usuário e senha, respectivamente, forem iguais aos digitados, o usuário terá acesso a área restrita;
            if($bancoUser == $user && $bancoPass == $pass){
                header('Location: ../View/table.html');
            }
            // Senão ele será redirecionado para uma página informando que o Login e/ou a Senha estão incorretos!
            else{  
                header('Location: index.html');
                echo "Login ou senha incorretos";
            }
        }        
    }