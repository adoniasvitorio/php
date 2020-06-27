<?php

$nome = "Adonias Vitorio";
$idade = 26;

// Concatenando strings utilizando aspas simples.
echo 'Hello World !, my name is ' . $nome . ', and I have ' . $idade . ' anos.';

// Concatenando strings utilizando aspas duplas.
echo "Hello World !, my name is $nome, and I have $idade anos.";

// Quebra de Linhas com caracter especial.
echo "Hello World !,\n my name is $nome, and I have $idade anos.";

// Tab de Linhas com caracter especial.
echo "Hello World !,\t my name is $nome, and I have $idade anos.";

// Quebra de Linhas com valor do php.
echo "Hello World !," . PHP_EOL;
echo "my name is $nome, and I have $idade anos.";

?>