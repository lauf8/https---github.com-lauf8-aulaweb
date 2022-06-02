<?php 
    class Animal {
        public function andar(){
            echo 'Animal andou';
        }

        public function correr(){
            echo 'Animal correu';
        }

    }

    class Cavalo extends Animal{
        public function andar(){
            echo 'Cavaaaaaaaaaaaaaaaalo';
        }
    }


    $cavalo = new Cavalo;
    $cavalo->andar();
    echo '<br>';
    $animal = new Animal;
    $animal->andar();

    ?>