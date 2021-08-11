<?php 

namespace Alura;

class CalculadoraMediaNotas
{
    public function calculaMedia(array $notas): ?float //retorna null, ou float (utilizando a interrogação)
    {

        $quantidadeNotas = sizeof($notas); //Função sizeof retorna o tamanho (o comprimento) do array
        if($quantidadeNotas > 0){

            $soma = 0;
            for($i = 0; $i < $quantidadeNotas; $i++){
                $soma += $notas[$i];
            }

            $media = $soma / $quantidadeNotas;
            return $media;

        } else {
            return null;
        }
        
    }
}