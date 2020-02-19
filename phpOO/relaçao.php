<?php
/*
class Pedido {
    public $numero;
    public $cliente;

}

class Cliente {
    public $nome;
    public $endereco;

}

$cliente = new Cliente();
$cliente->nome = "Diogo";
$cliente->endereco = "Rua xxxxxxx";

$pedido = new Pedido();
$pedido->numero = "123";
$pedido->cliente = $cliente;

$dados = array(
    'numero' => $pedido->numero,
    'nome_cliente' => $pedido->cliente->nome,
    'endereco_cliente' => $pedido->cliente->endereco
);

var_dump($dados);


class Produtos {
    public $name;
    public $valor;


    function __construct($nome, $valor){
        $this->name = $nome;
        $this->valor = $valor;

    }


}

class Carrinho {
    public $produtos;

    public function adiciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach($this->produtos as $produto) {
            echo $produto->name.'<br>';
            echo $produto->valor.'<hr>';
        }
    }
}


$produto1 = new Produtos("Notebook", "1555");
$produto2 = new Produtos("Mouse", "50");

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibe();
*/

class Pessoa {
    public function atribuiNome($nome) {
        return "O nome da pessoa é ".$nome;
    }
}

class Exibe {
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }
    public function exibeNome()
    {       
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe("Jose");
$exibe->exibeNome();