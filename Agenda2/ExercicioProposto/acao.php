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
<?php>
echo "Nome: ".$_POST['textNome']."<br>";
echo  "Sobrenome: ".$_POST['textSobrenome']."<br>";
echo "Email: ".$_POST['textEmail']."<br>";
echo "Formação: ".$_POST['textFormacao']."<br>";
echo "Descricao do Último Emprego: ".$_POST['textEmprego']."<br>";
?>
</html>