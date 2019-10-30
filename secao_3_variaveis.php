<?php

$nome = "String ";

echo $nome."<br>";

var_dump($nome);

// apaga variavel 
unset($nome);

echo $nome;


// parar a  execucao no codigo
//exit;

// se a variavel existir 
if(isset($nome))
    echo "Existe a variavel '$nome'";
else 
    echo "nao existe a variavel <br>";

    
    
// tipos compostos Arrays e Objetos
$frutas = array("abacaxi", "laranja", "manga");
var_dump($frutas);

// data 
$data = new DateTime();
echo "<br>";
var_dump($data);

echo "<br>";
// tipos especiais
$arquivo = fopen("teste.txt", "r");
var_dump($arquivo);

//variaveis pré definidas 

$valorGet =  $_GET['nome'];
var_dump($valorGet);

// cast  - conversao de dados
$convetido = (int)$_GET['nome'];
var_dump($convetido);

// cap ip
$ip = $_SERVER['REMOTE_ADDR'];
echo "<br>". $ip;

// variavel global , escopo de variavel

$nome = "thiago";

function exibeNome()
{
    global $nome;
    echo $nome;
}

// Operadores PHP 
$compara = 1 === 1.0; // compara o tipo e o valor 
//  comparacao  !== negacao e compara tipo e valor se é identico

// Operadores php 7 novos
// spaceship
var_dump($a <=> $b);
// se o $a for maior traz 1 se for igual traz 0 se for menor traz -1












    
    