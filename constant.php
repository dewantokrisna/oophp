<?php
// define('NAMA', 'Dewanto Krisna');
// echo NAMA;

// const UMUR = 19;
// echo UMUR;
// class Coba
// {
//     const NAMA = 'Dewa';
// }

// echo Coba::NAMA;


// echo __FILE__;
class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
