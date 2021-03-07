<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initicial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Atividade Online</title>
</head>
<body>
    <div class="w3-container w3-teal">
        <h2>Lojas CamaMesaBanho</h2>
    </div>
    <form class="w3-container" method="post" action="action.php">
        <label class="w3-text-teal"><b>Produto:</b></label>
        <input class="w3-input w3-border w3-light-grey" name="textNomeProduto" type="text">
        <label class="w3-text-teal"><b>Valor:</b></label>
        <input class="w3-input w3-border w3-light-grey" name="textValorProduto" type="number"> 
        <label class="w3-text-teal"><b>Escolha o grupo do produto:</b></label>
        <select class="w3-input w3-border w3-light-grey" name="cmbGrupo">
        <option value="cama" select>Cama - 10% de desconto!</option>
        <option value="mesa">Mesa - 20% de desconto!</option>
        <option value="banho">Banho - 30% de desconto!</option>
        </select>
        <br>
        <button class="w3-btn w3-blue-grey">Enviar</button>
    </form>
</body>
</html>