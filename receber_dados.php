<?php

$dados = [
    'pessoa' => [
        'nome' => readline("Nome: "),
        'data_nascimento' => readline("Data de nascimento: "),
        'altura' => readline("Altura: "),
    ]
];

$resultado = json_encode($dados,
    JSON_UNESCAPED_SLASHES |
    JSON_PRETTY_PRINT
);

file_put_contents("dados.json", $resultado);

echo($resultado);

#$dataNascimento = readline("Digite sua data de nascimento: ");
#$altura = readline("Digite sua altura: ");
#$dependentes = [];

/*while (true) {
    $nomeDoDependente = readline("Digite o nome do dependente e 'fim' para terminar: ");

    if ($nomeDoDependente == 'fim') {
        break;
    }

    $dataNascimentoDependente = readline("Digite a data de nascimento do dependente: ");
    $dependentes[] = ['nome' => $nomeDoDependente, 'dataNascimento' => $dataNascimentoDependente];
}*/