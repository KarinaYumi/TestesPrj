<?php
namespace tests;
    
use PHPUnit\Framework\TestCase;
use app\libraries\ProductImposto;

    class ProductImpostoTest extends TestCase
    {
        
        public function testProductName()
        {
            $p1 = new ProductImposto("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");

            $this->assertEquals("Karina", $p1->getName());
        }

        public function testProductSetName()
        {
            $p1 = new ProductImposto("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            $p1->setName("Yumi");
            $this->assertEquals("Yumi", $p1->getName());
        }


        public function testProductCpf(){
            $p2 = new ProductImposto("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            
            $this->assertEquals("4391644890", $p2->getCpf());
        }

        public function testProductSetCpf()
        {
            $p2 = new ProductImposto("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            $p2->setCpf("43916463829");
            $this->assertEquals("43916463829", $p2->getCpf());
        }

        public function testProductRendimento(){
            $p3 = new ProductImposto("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            
            $this->assertEquals(50000, $p3->getRendimento());
        }

        public function testProductSetRendimento()
        {
            $p3 = new ProductImposto("Karina", "4391644890", 50000, "22.5%", "Valor Imposto: R$11250");
            $p3->setRendimento(25000);
            $this->assertEquals(25000, $p3->getRendimento());
        }

        public function testCalculoAliquota(){
            $p1 = new ProductImposto("Karina", 43916447890, 21500);
            $this->assertEquals(0, $p1->CalculoAliquota(21500));

            $p2 = new ProductImposto("Karina", 43916447890, 31050);
            $this->assertEquals(7.5, $p2->CalculoAliquota(31050));

            $p3 = new ProductImposto("Karina", 43916447890, 39000);
            $this->assertEquals(15, $p3->CalculoAliquota(39000));

            $p4 = new ProductImposto("Karina", 43916447890, 53000);
            $this->assertEquals(22.5, $p4->CalculoAliquota(53000));

            $p5 = new ProductImposto("Karina", 43916447890, 71520);
            $this->assertEquals(27.5, $p5->CalculoAliquota(71520));

        }

        public function testCalculoImposto(){
            $p1 = new ProductImposto("Karina", 43916447890, 2000);
            $this->assertEquals(1400, $p1->calculoImposto(20000, 7,5));

        }

        
    }
?>