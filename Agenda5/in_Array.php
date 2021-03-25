<?php
$nomes = array("Rodrigo", "Felipe", "Maria", "Jose");
    
    //echo in_array("Carlos", $nomes);
    //echo in_array("Rodrigo", $nomes);

    if(in_array("Felipe", $nomes)):
        echo "Existe no array";
    else:
        echo "Não existe";
    endif;
?>