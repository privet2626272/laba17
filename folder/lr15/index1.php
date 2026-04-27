<?php
abstract class Figure{
    private $square, $color, $num;
    abstract public function infoAbout();
}
interface Count{
    public function getArea();
}
class Rectangle extends Figure implements Count{ 
    private $a, $b;
    private $num = 4;
    function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }    
    public function getArea(){
        return $this->a * $this->b;
    }
    public function infoAbout()
    {
        return "Это класс прямоугольника. У него " . $this->num . " стороны";
    } 
}
$rectangle1 = new Rectangle(5, 5);
echo "Площадь первого прямоугольника равна " . $rectangle1->getArea() . "см2" . "<br>";
$rectangle2 = new Rectangle(2, 21);
echo "Площадь второго прямоугольника равна " . $rectangle2->getArea() . "см2". "<br>" ;

class Triangle extends Figure implements Count{
    private $a, $b, $c;
    private $num = 3;
    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }    
    public function getArea(){
        $p = ($this->a + $this->b + $this->c) / 2;
        return sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
    } 
    public function infoAbout()
    {
        return "Это класс треугольника. У него " . $this->num . " стороны";
    } 
}
echo "Площадь первого треугольника равна " . $triangle1->getArea() . "см2" . "<br>";
$triangle2 = new Triangle(2, 3, 3);
echo "Площадь второго треугольника равна " . $triangle2->getArea() . "см2" . "<br>";
class Square extends Figure implements Count{
    private $a;
    private $num = 4;
    function __construct($a)
    {
        $this->a = $a;
    }    
    public function getArea(){
        return $this->a * $this->a;
    } 
    public function infoAbout()
    {
        return "Это класс квадрата. У него " . $this->num . " стороны";
    } 
}
echo "Площадь первого квадрата равна " . $square1->getArea() . "см2" . "<br>";
$square2 = new Square(21);
echo "Площадь второго квадрата равна " . $square2->getArea() . "см2" . "<br>";
