<?php
require 'classes/produto.php';
require 'models/produto.php';
class Pessoa {
  
    public $email;
    public $senha;
    public $nome;



    public function __construct($email,$senha,$nome){
        $this->setSenha($senha);
        $this->setEmail($email);
        $this->setNome($nome);
        
    }

   
    public function Logar(){
        if($this->email == "teste@teste.com"  and $this->senha == "123456"){
            echo "Logado com succ";

        }else {
            echo "Dados invalidos";
        }
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSenha(){
        return $this->email;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }

    
}

$logar = new Pessoa("teste@teste.com", "123456", "Diogo Vinicius");
$logar->Logar();
echo "<br>".$logar->getNome();

use classes\Produto as ProdutoClasse;
$produto = new ProdutoClasse();
$produto->mostrarDetalhes();

?>