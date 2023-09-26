<?php
namespace app\libraries;

class ProductImc{
    private $peso;
    private $altura;

    public function __construct($peso, $altura)
    {
        $this->peso = $peso;
        $this->altura = $altura;

    }

        public function setPeso($peso){
            $this->peso = $peso;
        }

        public function getPeso(){
            return $this->peso;
        }

        public function setAltura($altura){
            $this->altura = $altura;
        }

        public function getAltura(){
            return $this->altura;
        }

        public function classificacaoImc($peso ,$altura){
            $imc = ($peso / ($altura * $altura));
    
            if ($imc < 18.5) {
                return "Magreza";
            } else if ($imc < 25) {
                return "Peso Normal";
            } else if ($imc < 30) {
                return "Sobrepeso";
            } else if ($imc < 35) {
                return "Obesidade I";
            } else if ($imc < 40) {
                return "Obesidade II";
            } else {
                return "Obesidade III";
            }
        }
    }
        
?>