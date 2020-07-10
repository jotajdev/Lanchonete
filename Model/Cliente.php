<?php
// Sub-Classe de Conexão utilizada para realizar inserção de novos cadastros;
    
    class Cliente extends Conexao{ // O que determina que ela é uma Sub-Classe é o "extends Conexao";
        
        public function insert($query){ // Método para fazer a query;
            $this->connect(); // Método para conectar, previsto na classe principal "Conexão.php";
            $this->query = $this->mysqli->query($query);// Solicitação para inserção de novos dados;
            $this->disconnect(); // Método para desconectar do Banco.
        }
    }