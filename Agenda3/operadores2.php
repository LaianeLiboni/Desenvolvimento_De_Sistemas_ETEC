operadores2
<?php
    var_dump(5 > 4 && 5 > 3);
    var_dump(5 > 4 AND 5 > 3);
    var_dump(5 > 4 && 5 > 6);
    var_dump(5 > 4 AND 5 > 3);
    echo "<br>";
    var_dump(5 > 4 || 5 > 3);
    var_dump(5 > 4 OR 5 > 3);
    var_dump(5 > 4 || 5 > 6);
    var_dump(5 > 4 OR 5 > 6);
    var_dump(5 > 7 || 5 > 6);
    var_dump(5 > 7 OR 5 > 6);
    echo "<br>";
    var_dump(5 > 4 XOR 5 > 3);
    var_dump(5 > 4 XOR 5 > 6);
    var_dump(5 > 6 XOR 5 > 3);
    var_dump(5 > 6 && 5 > 7);
    echo "<br>";
    var_dump(!(5 > 4 && 5 > 3));
    var_dump(!(5 > 4 AND 5 > 3));
?>
