<?php

$keys = array("Campeão", "Vice", "Terceiro");
$values = array("Vasco", "Flamengo", "Botafogo");

$times = array_combine($keys, $values);
print_r($times);
?>