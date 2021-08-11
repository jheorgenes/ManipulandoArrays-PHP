<?php  
/** strict_types para ser utilizado tem que ser a primeira função chamada. */
declare(strict_types=1); //Deixa p PHP fortemente tipado, ou seja, se estabelecido tipo, deverá obedecer a regra do tipo

namespace Alura;

class ArrayUtils
{
    public static function remover(int $elemento, array &$array) //Array será modificado na íntegra e por isso foi passado como referência
    {
        /** 
         * array_search()
         * Recebe como Argumento ($elementoDoArray, $array, true ou false)
         * $elementoDoArray = Consulta no $array, aonde o valor que estiver dentro da $elementoDoArray variavel e está localizado
         * $array = Variável que armazena o valor 
         * Retorna a posição do Array
         */
        $posicao = array_search($elemento, $array, true); //Pega do $array o seu conteúdo, itera sobre ele para encontrar o valor definido no $elemento, depois retorna em qual posição ele se encontra

        if(is_int($posicao)){ //is_int é uma função que verifica se a variável é inteira e retorna true quando for, ou false quando não for
            unset($array[$posicao]); //Método unset destrói a variável especificada
        } else {
            echo "Não foi encontrado no array";
        }
        
    }

    public static function encontrarPessoasComSaldoMaior(int $saldo, array $array): array
    {
        $correntistasComSaldoMaior = array();
        foreach ($array as $chave => $valor) {

            if($valor > $saldo) {
                $correntistasComSaldoMaior[] = $chave;
            }
        }

        return $correntistasComSaldoMaior;
    }
}