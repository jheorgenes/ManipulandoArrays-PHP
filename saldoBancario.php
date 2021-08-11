<?php 

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000
];

foreach ($saldos as $saldo){
    echo "<p>saldo é $saldo</p>";
}

echo "<pre>";
var_dump($saldos);

sort($saldos); //Essa função ordena um array. Os elementos serão ordenados do menor para o maior ao final da execução dessa função.

var_dump($saldos);
echo "</pre>";

echo "<p>O menor saldo é $saldos[0]</p>";