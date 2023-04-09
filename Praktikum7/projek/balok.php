<?php

class Balok
{
    public $panjang, $lebar, $tinggi;

    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }

    public function getLuas()
    {
        $h = 2 * (($this->panjang * $this->lebar) +
        ($this->panjang * $this->tinggi) +
        ($this->lebar * $this->tinggi));
        echo "Luas Balok = $h";
    } 

    public function getVolume()
    {
        $v = $this->panjang * $this->lebar * $this->tinggi;
        echo "Luas Balok = $v";
    }
}

$objekBalok = new Balok(113,45, 21);
echo $objekBalok->getLuas();
echo "<br>";
echo $objekBalok->getVolume();

?>