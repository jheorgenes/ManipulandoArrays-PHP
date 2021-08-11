<?php
declare(strict_types=1); //Deixa p PHP fortemente tipado, ou seja, se estabelecido tipo, deverá obedecer a regra do tipo

namespace Alura;

require 'autoload.php';

$correntistas_e_compras = [
    "Giovanni",
    "João",
    12,
    "Maria",
    25,
    "Luis",
    "Luiza",
    "12",
]; //Não é recomendado no PHP, ter um array contendo suas posições com tipos diferentes

echo "<pre>";

var_dump($correntistas_e_compras);

ArrayUtils::remover(12, $correntistas_e_compras);

echo "<br>";

var_dump($correntistas_e_compras);

echo "</pre>";