<?php

$pessoa = [
    'nome' => readline("Nome: "),
    'data_nascimento' => readline("Data de nascimento: "),
    'altura' => readline("Altura: ")
];

$dependente = [];

$qntddependentes = (int)readline("Informe quantos dependentes você quer criar: ");

for ($i = 0; $i < $qntddependentes; $i++) {
    $nomeDependente = readline("Informe o nome do seu dependente: ");
    $dataDependente = readline("Informe a data do seu dependente: ");
    
    $dependente[] = [
        'nome' => $nomeDependente,
        'datanasc' => $dataDependente
    ];
}

$pessoa['dependente'] = $dependente;

$resultado = json_encode($pessoa,
    JSON_UNESCAPED_SLASHES |
    JSON_PRETTY_PRINT
);

file_put_contents("dados.json", $resultado);
