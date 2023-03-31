<?php

class Usuario { 
    private $cpf;
    private $nome;
    private $celular;
    private $email;
    private $login;
    private $senha;
  
    public function __construct($cpf, $nome,$celular,$email,$login,$senha) {
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->celular = $celular;
        $this->email = $email;
        $this->login = $login;
        $this->senha = $senha;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function getCelular(){
        return $this->celular;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getLogin(){
        return $this->login;
    }

    public function getSenha(){
        return $this->senha;
    }


    public function consultarDados() {
        return [
            'nome' => $this->getNome(),
            'cpf' => $this->getCpf(),
            'celular' => $this->getCelular(),
            'email' => $this->getEmail(),
            'login' => $this->getLogin(),
            'senha' => $this->getSenha(),
        ];
    }
};

?>
