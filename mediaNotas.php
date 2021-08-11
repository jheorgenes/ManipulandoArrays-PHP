<?php

require 'autoload.php';

$notas = [10,5,8];

//echo "<p>A nota de português é: $notas[0]</p>";
//echo "<p>A nota de matemática é: $notas[1]</p>";
//echo "<p>A nota de geografia é: $notas[2]</p>";
//echo "<p> nota de história é: $notas[3]</p>";
//echo "<p> nota de quimica é: $notas[4]</p>";
//echo "<p> nota de artes é: $notas[5]</p>";

$calculadora = new \Alura\CalculadoraMediaNotas();
$media = $calculadora->calculaMedia($notas);

if($media){
    echo "A média é $media";
} else {
    echo "Não foi possível calcular a média";
}

