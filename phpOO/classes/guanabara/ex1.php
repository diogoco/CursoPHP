<?php

class Conta {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __contruct(){
        $this->saldo = 0;
        $this->status = 1;
    }

    public function setNumConta($n){
        $this->numConta = $n;
    }

    public function getNumConta(){
         return $this->numConta;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        return $this->numConta;
    }

    public function setDono($dono){
    $this->dono = $dono;
    }

    public function getDono(){
    return $this->$dono;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($s){
        $this->saldo= $s;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($st){
        return $this->$status;
    }

    public function abrirConta($tipo){
        setTipo($tipo);
        setStatus(true);

        if($tipo == "CC"){
            $this->setSaldo(50);
        }else if($tipo == "CP"){
            $this->setSaldo(150);
        }
    }
    public function sacar($v){
        if($this->getStatus){
            if($this->getSaldo() > $v){
                $this->setSaldo($this->getSaldo() - $v);
            }else 
                echo "Saldo insuficiente";
        }else
            echo "Nao posso sacar de uma conta fechada";

    }
    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
        }
        echo "Conta fechada, nao consigo depositar";

    }

    public function fecharConta(){
        if($this->getSaldo() > 0){
            echo " Conta ainda tem dinheiro, nao é possivel";
        }else if($this->getSaldo() < 0){
            echo "Voce esta com dividas, pague antes de encerrar a conta";
        }
        $this->setStatus(false);
         

    }
    public function pagarMensal(){
        if($this-getTipo()=="CC"){
            $v=12;
        }else if ($this->getTipo() == "CP"){
            $v=20;
        }

        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "Problemas com a conta";
        }

    }

}


