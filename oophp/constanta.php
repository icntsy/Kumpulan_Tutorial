<?php

// define('NAMA', 'Ica Natasya');
// echo NAMA;

// echo "<br>";
// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Ica';
// }

// echo Coba::NAMA;

// echo __FILE__;
// echo __DIR__;

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba {
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;

?>