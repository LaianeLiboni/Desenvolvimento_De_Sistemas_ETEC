<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Arrays</title>
</head>
<body>
    <div class="w3-center w3-animate-top w3-padding">
        <h2 class="w3-blue">Notas Semestrais dos Alunos</h2>
        <h2 class="w3-blue">8º ANO A</h2>
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
                array("nome"=> "Zulmira","primeiroSemestre"=> 10, "segundoSemestre"=> 6));

                echo '<table class="w3-table-all w3-hoverable w3-textblack">';
                echo '<tr class="w3-blue ">';
                echo '<th class="w3-center"> Nome</th>';
                echo '<th class="w3-center"> Primeiro Semestre</th>';
                echo '<th class="w3-center"> Segundo Semestre</th>';
                echo '</tr>';

	            foreach($alunos as $aluno)
                {
                    echo '<tr>';
                    echo '<td class="w3-center">'.$aluno['nome'].'</td>';
                    echo '<td class="w3-center">'.$aluno['primeiroSemestre'].'</td>';
                    echo '<td class="w3-center">'.$aluno['segundoSemestre'].'</td>';
                    echo '</tr>';
                }
                echo '</table>';
	?>

    <br>
    
</div>
</body>
</html>
