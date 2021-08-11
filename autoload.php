<?php 

spl_autoload_register(
    function (string $namespaceClasse): void 
    {
        $caminho = "/src";
        $diretorio_classe = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClasse);
        /** 
         * getcwd()= retorna o caminho completo diretório até a pasta atual do arquivo */
        @include_once getcwd() . $caminho . DIRECTORY_SEPARATOR . "{$diretorio_classe}.php";
    }
);