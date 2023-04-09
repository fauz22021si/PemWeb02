<?php

class Bola
{
    public $phi, $jari2;

    public function __construct($p, $j)
    {
        $this->phi = $p;
        $this->jari2 = $j;
    }

    public function getLuas()
    {
        $h = 4 * ($this->phi * $this->jari2 * $this->jari2);
        echo "Luas Bola = $h";
    }

    public function getVolume()
    {
        $v = 4/3 * ($this->phi * $this->jari2 * $this->jari2);
        echo "Volume Bola = $v";
    }
}

$objekBola = new Bola(3.14, 21);
echo $objekBola->getLuas();
echo "<br>";
echo $objekBola->getVolume();

?>