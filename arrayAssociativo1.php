<?php 

$correntistas = [
    "Giovanni",
    "João",
    "Maria",
    "Luis",
    "Luisa",
    "Rafael"
];
  
$correntistasNaoPagantes = [
    "Luis",
    "Luisa",
    "Rafael",
];

/**
 * array_diff()= Recebe como argumento ($array que será validado, $parteDoArray que não será interpretado)
 * Essa função vai ler o array, ignorar uma parte determinada $parteDoArray e vai retornar o restante do array */
$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes); 

echo "<pre>";
var_dump($correntistasPagantes);
echo "</pre>";