<!DOCTYPE html>
<html lang="pt-Br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <title>Cadastro</title>
</head>
<body>
    <div class="w3-container w3-teal">
    <h2>Cadastro confirmado com Sucesso</h2>
<?php

$nome =$_POST['txtNome'];
echo "Nome: ".$nome."<br>";
$sobrenome =$_POST['txtSobrenome'];
echo "Sobrenome: ".$sobrenome."<br>";
$email =$_POST['txtEmail'];
echo "Email: ".$email."<br>";
$formacao =$_POST['txtFormacao'];
echo "Formação: ".$formacao."<br>";
$descricaoEmprego =$_POST['txtEmprego'];
echo "Descrição do Último Emprego: ".$descricaoEmprego."<br>";

?>
</html>