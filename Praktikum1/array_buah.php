<?php

//membuat array
$arrayBuah = ["Jeruk","Manggis","Apel"];

print_r($arrayBuah);
echo "<br>";

//cara kedua
var_dump($arrayBuah);

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah;
}
