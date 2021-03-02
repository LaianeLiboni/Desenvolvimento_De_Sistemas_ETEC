<?php
$nomeCompleto = "Maria Tereza";
$idade = '37';
$profissao = 'Professora';
$salario = 3500.50;

echo "Nome Completo: $nomeCompleto<br>";
echo "Idade: $idade<br>";
echo "Profissão:". $profissao."<br>";
echo "Salário: ". $salario."<br>";
echo "Salário: ".number_format($salario,2,",",".")."<br>";
?>
