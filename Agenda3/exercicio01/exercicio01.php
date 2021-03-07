<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta charset="UTF-8"/>
    <title>Curso PharException</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <?php
            $n=isset($_GET["num"])?$_GET["num"]:0;
            $o=isset($_GET["oper"])?$_GET["oper"]:1;
            switch($o){
                case 1: 
                    $r=$n*2;
                    break;
                case 2: 
                    $r=$n^3;
                    break;
                case 3:
                    $r=sqrt($n); //$n ^ (1/2);               
            }
            echo "O resultado da operacao solicitada foi $r";
        ?>
        <a href="exercicio01.html">Voltar</a>
    </div>
</body>
</html>
