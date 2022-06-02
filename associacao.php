<?php

    class Marca{
        public $nome;
        public $cnpj;
    }
    class Produto{
        public $nome;
        public $marca;
    }

    $nike = new Marca;
    $nike->nome = "Nike";
    $nike->cnpj = "54546525156";

    $jordan = new Produto;
    $jordan->nome = "Tenis Mid Masculino Jordan";
    $jordan->marca = $nike;

    var_dump($jordan);
?>