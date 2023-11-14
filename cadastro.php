<?php
    class cadastro
    {
 
        private $nome;
        private $email;
        private $dtnascimento;
        private $cidade;
        private $senha;
 
        public function __construct(){}
 
        public function create($_nome, $_email, $_dtnascimento,$_cidade,$_senha,)
        {
            $this->nome = $_nome;
            $this->email = $_email;
            $this->dtnascimento = $_dtnascimento;
            $this->cidade = $_cidade;
            $this->senha = $_senha;
        }
 
        public function cadastro()
        {
            include("assets/db/conn.php");
            $sql = "CALL piProduto(:nome, :email, :dtnascimento, :cidade, :senha)";
 
            $data = [
                'nome' => $this->nome,
                'email' => $this->email,
                'dtnascimento' => $this->dtnascimento
                'cidade' => $this->cidade,
                'valor' => $this->valor,
                'senha' => $this->senha
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($cadastro);
 
            return true;
        }
    }
?>