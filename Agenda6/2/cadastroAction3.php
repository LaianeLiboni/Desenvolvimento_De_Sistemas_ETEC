<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro - MYSQLI</title>
</head>
<body>
<div class="w3-padding w3-content w3-text-grey w3-third w3-display-middle">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "usbw";
        $dbname = "pwii";
        $conexao = new mysqli($servername, $username, $password, $dbname);
        if ($conexao->connect_error) {
            die("Connection failed: " . $conexao->connect_error);
        }
        $sql = "INSERT INTO alunoconcluinte (nome, nota1, nota2, nota3, nota4)
        VALUES ('".$_POST['txtNome']."', '".$_POST['txtNota1']."', '".$_POST['txtNota2']."', '".$_POST['txtNota3']."', '".$_POST['txtNota4']."')";

        if ($conexao->query($sql) === TRUE) {
        echo '
        <a href="index3.php">
        <h1 class="w3-button w3-blue">Aluno Concluinte salvo com sucesso! </h1>
        </a>
        ';

        } else {
        echo '
        <a href="index2.php">
        <h1 class="w3-button w3-teal">ERRO! </h1>
        </a>
        ';
        }
        $conexao->close();
    ?>
</div>
</body>
</html>