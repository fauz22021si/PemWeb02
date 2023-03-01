<?php
$profileArray = [
    "nama" => "Fauziah","semester" => 2
];

echo $profileArray['nama'] . "<br>";
echo $profileArray['semester'] . "<br>";

$profileMultiArray = [
    [
        "nama" => "Fauziah",
        "semester" => 2
    ], [
        "nama" => "Kibbul",
        "semester" => 7
    ]
];

foreach($profileMultiArray as $profile) {
    echo $profile['nama'] . "<br>";
    echo $profile['semester'] . "<br>";
}