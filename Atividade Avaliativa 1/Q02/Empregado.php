<?php

class Empregado{
    private $nome;
    private $sobrenome;
    private $sal;


    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->sobrenome;
    }
    public function getSal(){
        return $this->sal;
    }

 


    public function setNome($nome){
        return $this->nome=$nome;       
    }

    public function setSobrenome($sobrenome){
        return $this->sobrenome=$sobrenome;       
    }

    public function setSal($sal){
        return $this->sal=$sal*12;       
    }

  
    

public function getExibirEmpregado(){
    return $this->sal;
}

    public function getReajuste(){
        $reajuste = $this->sal * 0.1;
        $this->sal += $reajuste;
        return $this->sal;
    }
}

?>