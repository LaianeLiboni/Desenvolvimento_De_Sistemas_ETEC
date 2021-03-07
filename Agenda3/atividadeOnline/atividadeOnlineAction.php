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
    <h2>Promoção do Mês de Aniversário!</h2>
        <?php

            $valorCompra = $_POST['txtValorCompra'];
            $novoValor = 0;
            $desconto;
            echo "".$_POST['txtNome']."! <br> ";
            echo "Valor da Compra sem Desconto: R$ ".$_POST['txtValorCompra']."<br>";
            echo "Forma de Pagamento Escolhida: ".$_POST['cmbPag']."<br>";

            if($_POST['cmbPag'] == "Depósito"){
                echo "Desconto de: 10%"."<br>";
                $desconto = $valorCompra*0.10;
                $novoValor = $valorCompra - $desconto;
               
            }elseif($pag == "Boleto"){
                echo "Desconto de: 8%"."<br>";
                $desconto = $valorCompra*0.08;
                $novoValor = $valorCompra - $desconto;
            }else{
                echo "Desconto de: 0%"."<br>";
                $desconto = 0;
                $novoValor = $valorCompra - $desconto;
            }
            echo "Você economizou: R$ ".$desconto."<br>";
            
            echo "Valor à Pagar: R$ ".$novoValor."<br>"
                
        ?>
    </h1>
    </div>
    </body>
    </html>