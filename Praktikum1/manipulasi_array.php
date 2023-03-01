<?php

$arrayBuah = ["Jeruk","Manggis","Apel","Durian"];

//mengurutkan array
sort($arrayBuah);

//menghapus value array paling akhir
array_pop($arrayBuah);

//menghapus variabel ataupun spesifik value array
unset($arrayBuah[1]);

//menambahkan value array di paling akhir
array_push($arrayBuah, "Buah Naga");

//menghapus value/data array paling awal
array_shift($arrayBuah);

//menambahkan value array paling akhir
array_unshift($arrayBuah, "Semangka");

//menghapus data/value array dengan spesifik key/index
$arrayBuah[1] = "Anggur";

foreach($arrayBuah as $buah) {
    echo "<br>" . $buah ;
}