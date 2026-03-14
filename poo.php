<?php
/**
 * Ejecutar:
 * 1. Abrir cmd
 * 1. cd ruta/del/proyecto 
 * 3. c:\xampp\php\php.exe nombre_del_proyecto.php
 */
abstract class Figura {
    public abstract function area();

    public function getAreaMsg() {
        return "El área de la figura es: " . $this->area() . "\n";
    }
}

interface IFigura {
    public function toString();
}

class Cuadrado extends Figura implements IFigura {
    private $arista;

    public function __construct($arista = null) {
        $this->arista = $arista;
    }

    public function toString() {
        return "Cuadrado con arista de: " . $this->arista;
    }

    public function setArista($value) {
        $this->arista = $value;
    }

    public function getArista() {
        return $this->arista;
    }

    public function area() {
        return pow($this->arista, 2);
    }
}

class Rectangulo extends Figura implements IFigura {
    private $base = 0;  
    private $altura = 0;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area() {
        return $this->base * $this->altura;
    }

    public function toString() {
        return "\nEl rectangulo es de " . $this->base . " x " . $this->altura;
    }
}

class Triangulo extends Figura implements IFigura {
    private $base = 0;  
    private $altura = 0;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function area() {
        return ($this->base * $this->altura) / 2;
    }

    public function toString() {
        return "\nEl triangulo es de " . $this->base . " x " . $this->altura;
    }
}

$cuadrado1 = new Cuadrado();
$cuadrado1->setArista(5);
echo "\nEl cuadrado tiene una arista de: " . $cuadrado1->getArista() . "\n";
echo "El área del cuadrado es: " . $cuadrado1->area() . "\n";
echo $cuadrado1->getAreaMsg() . "\n";

$rectangulo1 = new Rectangulo(10, 15);
echo $rectangulo1->toString() . "\n";
echo $rectangulo1->getAreaMsg() . "\n";

$triangulo1 = new Triangulo(10, 5);
echo $triangulo1->toString() . "\n";
echo $triangulo1->getAreaMsg() . "\n";