<?php

$arquivo = file_get_contents($argv[1]);
$meu_array = json_decode($arquivo, $associative = true, flags : JSON_THROW_ON_ERROR);

foreach ($meu_array as $chave =>$valor) {
   echo "$chave => ";
   var_dump($valor);
}