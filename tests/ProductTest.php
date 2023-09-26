<?php
    namespace tests;
    
    use PHPUnit\Framework\TestCase;
    use app\libraries\Product;

    class ProductTest extends TestCase
    {
        
        public function testProductName()
        {
            $p1 = new Product("Celular IPHONE 8", 10000.00);

            $this->assertEquals("Celular IPHONE 8", $p1->getName());
        }

        public function testProductSetName()
        {
            $p1 = new Product("Celular IPHONE 8", 10000.00);
            $p1->setName("Celular IPHONE 10");
            $this->assertEquals("Celular IPHONE 10", $p1->getName());
        }

        public function testProductPreco(){
            $p2 = new Product("Celular IPHONE 8", 10000.00);
            
            $this->assertEquals(10000.00, $p2->getPreco());
        }

        public function testSetPreco(){
            $p1 = new Product("Celular IPHONE 8", 10000.00);
            $p1->setPreco(10.00);
            $this->assertEquals(10.00, $p1->getPreco());
        }

        public function testSetName()
        {
            $p1 = new Product("Celular IPHONE 8", 10000.00);
            $p1->setName('cel');
            $this->assertEquals("cel", $p1->getName());
        }
    }
?>

