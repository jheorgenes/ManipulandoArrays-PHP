<?php 

namespace Alura;

require 'autoload.php';

$correntistas = [
  "Giovanni",
  "João",
  "Maria",
  "Luis",
  "Luisa",
  "Rafael"
];

$saldos = [
   2500,
   3000,
   4400,
   1000,
   8700,
   9000
];
/** 
 * array_merge()= Faz a junção de dois Arrays
 * recebe dois argumentos($array que será validado, $arrayComparativo que servirá para realizar a comparação) */
//$relacionados = array_merge($correntistas, $saldos);

/** 
 * array_combine()= Cria um array usando um array para chaves e outro para valores
 * recebe dois argumentos($array que será validado, $arrayComparativo que servirá para realizar a comparação)
 * Forma: array_combine(array $keys, array $values): array */
$relacionados = array_combine($correntistas, $saldos);

//$relacionados["Matheus"] = 4500; //Adicionando uma nova posição no array (a key é definida como string) e atribuíndo o seu valor

//echo "<pre>";
//var_dump($relacionados);
//echo "</pre>";

//echo $relacionados["Giovanni"]; //Utilizando a função array_combine, torna possível consultar a posição do array como uma string

//echo "O saldo do João é: {$relacionados["Joao"]}"; //Na hora de imprimir uma string que contém outros dados dentro de uma string, utilizar as chaves "{}".


/** Declaração de array Associativo */
//$array_associativo = [
//    "Jheorgenes" => 5000,
//    "Evelyn" => 4000,
//];


/** 
 * array_key_exists()= Valida se a chave existe dentro do array 
 * Recebe dois argumentos como parâmetro: ("key que está sendo consultado", $array que está sendo validado) */
if(array_key_exists("João", $relacionados)) {
    echo "O saldo do João é: {$relacionados["João"]}";
} else {
    echo "Não foi encontrado";
}

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

echo "<pre>";
var_dump($maiores);
echo "</pre>";


