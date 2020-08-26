<?php

// latihan Array
$jurusan = array("RPL", "TKJ", "AK", "AP", "KIMIA", "LAS");
//print_r($jurusan);

//echo $jurusan[5];

$jurusan = array("RPL" => "Rekayasan Perangkat Lunak", "TKJ" => "Teknkik Komputer Jaringan");

//echo $jurusan['RPL'];

$nilai_a = 30;
$nilai_b = 50;

$total1 = $nilai_a + $nilai_b;

$total2 = $nilai_a - $nilai_b;

$total3 = $nilai_a * $nilai_b;

/*echo $total1;
echo $total2;
echo $total3;*/



//echo sqrt($nilai_a);

//sqrt()fungsi akar

$hasil_akar = sqrt($nilai_b);
echo $hasil_akar . "<br>";
echo "pembulatan ke atas : ceil() :" . ceil($hasil_akar);
echo "<br>";
echo "pembulatan ke bawah: floor() :" . floor($hasil_akar);
