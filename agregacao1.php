<?php
    class Produto{
        public $nome;
        public $valor;

        function __construct($nome,$valor){
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }

    class Carrinho{
        public $prodCar;
        public $total;
        public $maiscaro;

        public function adiciona(Produto $produto){
            $this->prodCar[] = $produto;
        }
        public function exibir(){

            foreach($this->prodCar as $prod){
                echo $prod->nome.'<br>';
                echo $prod->valor.'<hr>';
            }
        }

            public function total(){
                foreach ($this->prodCar as $prod) {
                    
                    $this->total += $prod->valor;
                }

                echo 'O valor total da compra foi de '.$this->total;
        }

        public function maisCaro(){
            $controler = 0;
            foreach ($this->prodCar as $prod){
                if($prod->valor > $controler){
                   $this->maiscaro = $prod->nome;
                   $controler = $prod->valor;
                }
            }
            echo 'O produto mais caro é '.$this->maiscaro;
    }
    }

    $produto1 = new Produto("Computador",3500);
    $produto2 = new Produto("Mouse",110);   
    $produto3 = new Produto("Monitor",500);
    $produto4 = new Produto("Teclado",350);
    $produto5 = new Produto("MousePad",19);
    $produto6 = new Produto("Celular",600);

    $carrinho = new Carrinho;
    $carrinho->adiciona($produto1);
    $carrinho->adiciona($produto2);
    $carrinho->adiciona($produto3);
    $carrinho->adiciona($produto4);
    $carrinho->adiciona($produto5);
    $carrinho->adiciona($produto6);
    $carrinho->exibir();
    $carrinho->total();
    $carrinho->maisCaro();
?>