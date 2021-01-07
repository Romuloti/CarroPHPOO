<?php
include_once("Carro.php");
include_once("Fiat.php");
include_once("Ford.php");

echo("<pre>");
// $carro1 = new Carro();
// // var_dump($carro1);

// $carro1->setAno(2020);
// //var_dump($carro1);

// // $carro1->setMarca("AAA");
// //var_dump($carro1);

// $carro2 = clone($carro1);
// var_dump($carro1);
// var_dump($carro2);

// $carro2->ano = 2019;
// var_dump($carro1);
// var_dump($carro2);

// $fiat = new Fiat("Palio");
// // var_dump($fiat);

// $fiat->setAno(2019);
// // var_dump($fiat);

$fiat = new Fiat("Palio");
$ford = new Ford("Ka");

var_dump($fiat);
var_dump($ford);

var_dump($fiat->calculaPreco());
var_dump($ford->calculaPreco());