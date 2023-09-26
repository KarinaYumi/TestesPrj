<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\ProductImc;

    class ProductImcTest extends TestCase
    {
        
        public function testProductPeso()
        {
            $p1 = new ProductImc(47, 1.69);
            $this->assertEquals(47, $p1->getPeso());
        }

        public function testProductSetPeso()
        {
            $p1 = new ProductImc(47, 1.69);
            $p1->setPeso(50);
            $this->assertEquals(50, $p1->getPeso());
        }

        public function testProductAltura(){
            $p2 = new ProductImc(47, 1.69);
            $this->assertEquals(1.69, $p2->getAltura());
        }

        public function testProductSetAltura()
        {
            $p2 = new ProductImc(47, 1.69);
            $p2->setAltura(1.71);
            $this->assertEquals(1.71, $p2->getAltura());
        }
        
        public function testImcCalculo()
        {
            $p1 = new ProductImc("Karina", 45, 1.70);
            $this->assertEquals("Magreza", $p1->classificacaoImc(45, 1.70));

            $p2 = new ProductImc("Karina", 72, 1.70);
            $this->assertEquals("Peso Normal", $p2->classificacaoImc(72, 1.70));

            $p3 = new ProductImc("Karina", 70, 1.60);
            $this->assertEquals("Sobrepeso", $p3->classificacaoImc(70, 1.60));

            $p4 = new ProductImc("Karina", 93, 1.70);
            $this->assertEquals("Obesidade I", $p4->classificacaoImc(93, 1.70));

            $p5 = new ProductImc("Karina", 109, 1.70);
            $this->assertEquals("Obesidade II", $p5->classificacaoImc(110, 1.70));

            $p6 = new ProductImc("Karina", 200, 1.70);
            $this->assertEquals("Obesidade III", $p6->classificacaoImc(200, 1.70));
        }
        
    }
?>