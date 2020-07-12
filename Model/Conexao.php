<?php
// Classe Principal
    class Conexao{

        var $servBanco    = 'localhost'; // Variável para o servidor do banco
        var $usuarioBanco = 'root'; // Variável para o usuário do servidor
        var $passBanco    = ''; // Variável para a senha do servidor
        var $nameBanco    = 'jdelivery'; // Variável para o nome do banco
        var $query        = null; // Variável para fazer a solicitação
        var $mysqli       = null; // Variável para as funções mysqli do php
        
        // Método para realizar a conexão com o nanco
        public function connect(){
            $this->mysqli = new mysqli($this->servBanco, $this->usuarioBanco, $this->passBanco, $this->nameBanco);    
        }
        
        // Método para desconectar
        public function disconnect(){
            $this->mysqli->close();
        }

    }