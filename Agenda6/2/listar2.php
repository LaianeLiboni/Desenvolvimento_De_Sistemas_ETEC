<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Listagem de Jogos - MYSQLI</title>
</head>
<body>
<a href="index2.php" class="w3-display-topleft">
    <i class="fa fa-arrow-circle-left w3-large w3-teal w3-button w3-xxlarge"></i>     
</a> 
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "usbw";
            $dbname = "pwii";
            $conexao = new mysqli($servername, $username, $password, $dbname);
            if ($conexao->connect_error) {
                die("Connection failed: " . $conexao->connect_error);
            } 
                echo '
                <div class="w3-paddingw3-content w3-half w3-display-topmiddle w3-margin">
                <h1 class="w3-center w3-teal w3-round-large w3-margin">Listagem de Jogos</h1>
                <table class="w3-table-all w3-centered">
                <thead>   
                    <tr class="w3-center w3-teal">
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Fabricante</th>
                    </tr>
                <thead>
                ';
                $sql = "SELECT * FROM jogo" ;
                $resultado = $conexao->query($sql);
                if($resultado != null)
                foreach($resultado as $linha) {
                    echo '<tr>';
                    echo '<td>'.$linha['idjogo'].'</td>';
                    echo '<td>'.$linha['nome'].'</td>';
                    echo '<td>'.$linha['fabricante'].'</td>';
                    echo '</tr>';
                }
                echo '
                    </table>
                </div>';
            $conexao->close();
        ?>
    </div>
</body>
</html>