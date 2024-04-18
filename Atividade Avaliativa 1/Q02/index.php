<?php

include "Empregado.php";

$empregado1 = new Empregado();
$empregado1->setNome("Erick");
$empregado1->setSobrenome("Azevedinho");
$empregado1->setSal(1300.00);

$empregado2 = new Empregado();
$empregado2->setNome("Ana");
$empregado2->setSobrenome("Silva");
$empregado2->setSal(5000.00);

echo "Nome: {$empregado1->getNome()}\n";
echo "Sobrenome: {$empregado1->getSobrenome()}\n";
echo "Salário anual: {$empregado1->getSal()}\n";

$empregado1->getReajuste();

echo "Salário anual com reajuste: {$empregado1->getExibirEmpregado()}\n\n";

echo "Nome: {$empregado2->getNome()}\n";
echo "Sobrenome: {$empregado2->getSobrenome()}\n";
echo "Salário anual: {$empregado2->getSal()}\n";

$empregado2->getReajuste();

echo "Salário anual com reajuste: {$empregado2->getExibirEmpregado()}\n";



?>