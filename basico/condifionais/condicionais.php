<?php

$nome = "Adonias";
$idade = 26;

echo "Voce so pode continuar se a idade for a partir de 16 anos" . PHP_EOL;

//condicionais 'igual' ou 'maior'
if ($idade == 18 || $idade > 18) {
    echo "Voce tem $idade ..." . PHP_EOL;
    echo "Pode continuar" . PHP_EOL;
}

//condicionais 'igual', 'ou' e 'maior' utilizando operador matematico.
if ($idade >= 18) {
    echo "Voce tem $idade ..." . PHP_EOL;
    echo "Pode continuar" . PHP_EOL;
}

//condicionais 'igual', 'ou' e 'maior' utilizando operador 'or' do php.
if ($idade == 18 or $idade > 18) {
    echo "Voce tem $idade ..." . PHP_EOL;
    echo "Pode continuar" . PHP_EOL;
}

//condicionais 'igual', 'e' e 'maior' utilizando operador matematico.
if ($idade >= 18 && $nome == 'Adonias') {
    echo "Voce tem $idade, e nome $nome" . PHP_EOL;
    echo "Pode continuar" . PHP_EOL;
}

//condicionais 'igual', 'e' e 'maior' utilizando operador 'and' do php.
if ($idade >= 18 and $nome == 'Adonias') {
    echo "Voce tem $idade, e nome $nome" . PHP_EOL;
    echo "Pode continuar" . PHP_EOL;
}

//condicional 'se não'.
if ($idade >= 18 and $nome == 'Adonias') {
    echo "Voce tem $idade, e nome $nome" . PHP_EOL;
    echo "Pode continuar" . PHP_EOL;
} else {
    echo "Voce não pode entrar, voce tem $idade anos.";
}

if ($idade >= 18) {
    echo "Voce tem $idade" . PHP_EOL;
    echo "Pode continuar" . PHP_EOL;
} else if ($nome == 'Adonias'){
    echo "Voce tem nome $nome" . PHP_EOL;
    echo "Pode continuar" . PHP_EOL;
} else {
    echo "Voce não pode entrar, voce tem $idade anos.";
}

/*
Tambem e possivel utilziar operador ternario quando podemo reduzer as intruções em uma unica linha.
Exemplo:
$variave = $condiçao ? $valorSeVerdadeiro : $valorSeFalso;
*/

$mensagem = $idade < 18 ? 'Você e menor de idade' : 'Voce e maior de idade' . PHP_EOL;
echo $mensagem;

echo "Tchau!";
echo PHP_EOL;
?>