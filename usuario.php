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
        
        public function getnome()
        {
            return $this->nome;
        }
 
        public function setnome($_nome)
        {
            $this->nome = $_nome;
        }
 
        
        public function getemail()
        {
            return $this->email;
        }
 
        public function setemail($_email)
        {
            $this->limite = $_email;
        }

        public function getdtnascimento()
        {
            return $this->dtnascimento;
        }
 
        public function setdtnascimento($_dtnascimento)
        {
            $this->dtnascimento = $_dtnascimento;
        }
 
        public function getcidade()
        {
            return $this->cidade;
        }
 
        public function setcidade($_cidade)
        {
            $this->cidade = $_cidade;
        }

        public function getsenha()
        {
            return $this->senha;
        }
 
        public function setsenha($_senha)
        {
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
       
        public function listarProduto()
        {
            include("assets/db/conn.php");

            $sql = "CALL psListarProduto('')";
            $data = $conn->query($sql)->fetchAll();

            return $data;
        }
        public function deleteUsuario($_id)
        {
 
            include("db/conn.php");
            $sql = "CALL piUsuario(:nome, :email, :dtnascimento, :cidade, :senha)";
 
            $data = [
 
               "id" => $_id
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($cadastro);
 
            return true;
 
         
        }
        public function editar($_id)
        {
 
            include("db/conn.php");
            $sql = "CALL psUsuario(:id)";
 
            $data = [
 
               "id" => $_id
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($editar);
 
            return true;
 
         
        }

        public function atualizarcadastro($_id)
        {
            include("assets/db/conn.php");
            $sql = "CALL puProduto(:id, :nome)";

            $data = [
                'id' => $_id,
                'nome' => $this->nome,
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;
        }
    }

?>