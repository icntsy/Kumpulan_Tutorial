<?php 

// Pertemuan 2 - PHP Dasar
// Sintaks php

// Standar Output (perintah php untuk mencetak sesuatu ke layar)
// echo, print (mencetak tulisan, isi variabel string)
// print_r (mencetak array)
// var_dump (melihat isi dari variabel atau untuk debuging) akan memberikan informasi yang ditampilkan itu type data apa dan ukuran nya berapa.
// print_r dan var_dump untuk tahap development

// echo "Ica Natasya";
// echo 123;
// true boolean itu 1, boolean false itu kosong
// echo true;
// echo false;
// tutup echo boleh kutip ' atau "
// php kutip " lebih sakti dari pada kutip '
// print_r("Ica Natasya");
// var_dump("Ica Natasya");

// Penulisan Sintaks PHP
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan tipe data
// Variabel untuk menampung sebuah nilai, variabel diphp tidak perlu 
// mendefinisikan tipe data untuk sebuah nilai untuk ditampung ke variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// interpolasi untuk mengecek ada variabel atau tidak didalam kutip dua "
// $nama = "Ica ";

// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// echo 1 + 1;
// $x = 5;
// $y = 4;
// echo $x * $y;

// penggabung string / concat
// php . javascript +

// $nama_depan = "Ica";
// $nama_belakang = "Natasya";
// echo $nama_depan . " " . $nama_belakang;

// Assigment (operator penugasan)
// =, +=, -=, *=, /+, %=, .=
// $x = 1;
// $x += 5;
// echo $x;

// $nama = "Ica"; 
// $nama .= " ";
// $nama .= "Natasya";
// echo $nama;

// Perbandingan mengecek nilai bukan type data
// <, >, <=, >=, ==, !=
// var_dump(1 < "1");

// identitas untuk mengecek tipe data
// ====, !==
// var_dump(1 === "1");

// Logika untuk pengkondisian
// && (dua2 nya harus bener), ||(or cukup satu yang benar), !
// $x = 10;
// var_dump($x < 20 && $x % 2 == 0);
?>
