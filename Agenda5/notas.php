<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" contente="width=device-width, initial-scale=1.0">
	<link rel="style.sheet" href='https://www.w3schools.com/w3css/4/w3.css'>
	<title>Notas</title>
</head>
<body>
<div class="w3-third w3-center w3-animate-top w3-padding">
    <form class="w3-container" method="post" action="atividadeOnlineAction.php">
	    <label class="w3-text-teal"><b>Nome do Aluno</b></label>
	    <input class="w3-input w3-border w3-light-grey" name="textNome" type="text">
        <label class="w3-text-teal"><b>Primeiro Semestre</b></label>
	    <input class="w3-input w3-border w3-light-grey" name="textPrimeiroSemestre" type="number">
        <label class="w3-text-teal"><b>Segundo Semestre</b></label>
	    <input class="w3-input w3-border w3-light-grey" name="textSegundoSemestre" type="number">

	<?php
    $alunos = array(
                array("nome"=> "Aline","primeiroSemestre"=> 10, "segundoSemestre"=> 9.5),
                array("nome"=> "Alfredo","primeiroSemestre"=> 8, "segundoSemestre"=> 5),
                array("nome"=> "Carla","primeiroSemestre"=> 5, "segundoSemestre"=> 6.5),
                array("nome"=> "César","primeiroSemestre"=> 9, "segundoSemestre"=> 9),
                array("nome"=> "Daniel","primeiroSemestre"=> 10, "segundoSemestre"=> 7),
                array("nome"=> "Esnar","primeiroSemestre"=> 8, "segundoSemestre"=> 6),
                array("nome"=> "Henzo","primeiroSemestre"=> 6, "segundoSemestre"=> 8),
                array("nome"=> "Pablo","primeiroSemestre"=> 7, "segundoSemestre"=> 5),
                array("nome"=> "Wallace","primeiroSemestre"=> 8, "segundoSemestre"=> 7),
                array("nome"=> "Zulmira","primeiroSemestre"=> 10, "segundoSemestre"=> 6)
                );

                echo 'table class="w3-table-all w3-hoverable w3-text-black">';
	            echo '<tr class="w3-teal">';
	            echo '<th class="w3-center">Nome</th>';
	            echo '<th class="w3-center-center">Primeiro Semestre</th>';
	            echo '<th class="w3-center-center">Segundo Semestre</th>';
	            echo '</tr>';

	            foreach($alunosAssociativos as $aluno)
                {
                echo '<tr>';
                echo '<td class="w3-center">'.$aluno['nome'].'</td>';
                echo '<td class="w3-center">'.$aluno['primeiro semestre'].'</td>';
                echo '<td class="w3-center">'.$aluno['segundo semestre'].'</td>';
                echo '</tr>';
                }
                echo '</table>';
	?>

    <br>
    
</div>
</body>
</html>
