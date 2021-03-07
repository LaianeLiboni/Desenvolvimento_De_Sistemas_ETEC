<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initicial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Parabéns!</title>
</head>
<body>
    <div class="w3-container w3-teal">
    <h1>
        <?php
            $valorProduto = $_POST['textValorProduto'];
            $grupo = $_POST['cmbGrupo'];
            $desconto;

            /*if($grupo == "cama")
            {
                $desconto = 10;
            }
            if($grupo == "mesa")
            {
                $desconto = 20;
            }
            if($grupo == "banho")
            {
                $desconto = 30;
            }*/

            if($grupo == "cama"){
                $desconto = 10;
            }elseif($grupo == "mesa"){
                $desconto = 20;
            }else{
                $desconto = 30;
            }

            $valorDesconto = $valorProduto - (($valorProduto*$desconto)/100);
            echo "Valor final do produto: R$ $valorDesconto<br>";

            switch($grupo){
                case "cama":
                    echo "O desconto foi de: 10%<br>";
                    break;
                case "mesa":
                    echo "O desconto foi de: 20%<br>";
                    break;
                case "banho":
                    echo "O desconto foi de: 30%<br>";
                    break;
            }

            echo "------------------------------<br>";

            echo $valorDesconto > 100 ? "Frete Gratuito!" : "Frete: R$ 30,00";
        ?>
    </h1>
    </div>
    </body>
    </html>
