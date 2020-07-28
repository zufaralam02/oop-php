<?php

// define("NAMA", "Rofiif Zufar Allam");
// echo NAMA;

// echo "\n";

// const UMUR = 19;
// echo UMUR;



// class Coba
// {
//     const NAMA = "Rofiif Zufar Allam";
// }

// echo Coba::NAMA;



// echo __LINE__;
// echo __FILE__;
// echo __DIR__;
// echo __FUNCTION__;
// echo __CLASS__;
// echo __TRAIT__;
// echo __METHOD__;
// echo __NAMESPACE__;

// function coba()
// {
//     return __FUNCTION__;
// }
// echo coba();

class Coba
{
    public $class = __CLASS__;
}
$obj = new Coba();
echo $obj->class;