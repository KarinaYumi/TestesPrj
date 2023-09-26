<?php
namespace app\libraries;

class ProductImposto{
    private $name;
    private $cpf;
    private $rendimento;
    private $aliquota;

    public function __construct($name, $cpf, $rendimento)
    {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->rendimento = $rendimento;
    }

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setRendimento($rendimento){
            $this->rendimento = $rendimento;
        }

        public function getRendimento(){
            return $this->rendimento;
        }

        public function calculoAliquota($rendimento){
            if ($rendimento <= 22847.76){
                return 0;
            }else if ($rendimento <= 33919.80){
                return 7.5;
            }else if ($rendimento <= 45012.60){
                return 15;  
            }else if ($rendimento <= 55976.16){
                return 22.5;
            }else {
                return 27.5;
            }
        }

        public function calculoImposto($rendimento, $aliquota){
            $imposto = ($rendimento * $aliquota) / 100;
            return $imposto = number_format($imposto, 2, '.', '');
            
        }

    } 
?>