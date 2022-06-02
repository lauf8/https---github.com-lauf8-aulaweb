<?php
    class Veiculo{
        public $modelo;
        public $cor;
        public $ano;

        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }
        public function getCor(){
            return $this->cor;
        }
        public functio  n setCor($cor){
            $this->cor = $cor;
        }
        public function getAno(){
            return $this->ano;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }
    }


    class Carro extends Veiculo{
        public function cavaloDePau(){
            echo 'Cavalo de Pau';
        }
    }

    class Moto extends Veiculo{
        public function empinar(){
            echo 'VRUUUUUUUM';
        }
    }

    $pop100 = new Moto;

    $pop100->empinar();

?>