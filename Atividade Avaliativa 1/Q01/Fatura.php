<?php
class Fatura{

    private $numero;
    private $descricao;
    private $quantidade;
    private $preco;

/*Método get*/

public function getNumero(){
    return $this->numero;
}
public function getDescricao(){
    return $this->descricao;
}
public function getQuantidade(){
    return $this->quantidade;
}
public function getPreco(){
    return $this->preco;
}


/*Métodos set*/

public function setNumero($numero){
    $this->numero=$numero;
}
public function setDescricao($descricao){
    $this->descricao=$descricao;
}
public function setQuantidade($quantidade){
    $this->quantidade=$quantidade;
}
public function setPreco($preco){
    $this->preco=$preco;
}


public function getTotalFatura(){
    if($this->preco < 0){
        $this->preco=0;
    }

    $total = $this->preco * $this->quantidade;
    
    if($total < 0){
        $total=0;
    }
    return $total;
}

}

?>