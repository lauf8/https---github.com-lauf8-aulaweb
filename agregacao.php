<?php
    class Pessoa{
        public $nome;
        public $idade;
        
        public function MetodoPessoa(){
            echo 'Nome da pessoa'.$this->nome.' Idade '.$this->idade;

        }

       

    }
    $pessoa = new Pessoa;
    $pessoa->nome = 'Lucão';
    $pessoa->idade = 21;
    $pessoa->MetodoPessoa();
    echo $pessoa->nome;
?>