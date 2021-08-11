<?php 

$nomes = "Jheorgenes, João, Maria, Pedro"; //Arrays de string não entram são reconhecidos diretamente pelo PHP

$array_nomes = explode(", ", $nomes); //Função explode utiliza o primeiro argumento como parâmetro de identificação e o array que vai validar e separar

foreach ($array_nomes as $nome){
    echo "<p>Olá $nome</p>";
}

$nomesJuntos = implode(", ", $array_nomes); //Função implode faz o contrário. Pega um array (o segundo argumento) e retira a sua quebra "[" ou "]" e substitui pelo que for definido como primeiro argumento

echo $nomesJuntos;