<?php


include 'Fatura.php';

$fatura1 = new Fatura();
$fatura1->setNumero(12);
$fatura1->setDescricao("Celular");
$fatura1->setQuantidade(7);
$fatura1->setPreco(1000.50);

$total=$fatura1->getTotalFatura();

echo "Quantidade de itens: {$fatura1->getQuantidade()}\n";
echo "Preço: R$ {$fatura1->getPreco()}\n";
echo "Valor total: R$ $total";

?>