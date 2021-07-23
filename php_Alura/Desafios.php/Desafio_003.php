<?php

$peso = 100.00;
$altura = 1.85;

$IMC = $peso/($altura * $altura);

echo "Seu IMC é $IMC". PHP_EOL;

if($IMC < 16){

     echo "Subpeso Severo"; 

} elseif( $IMC == 16 || $IMC <= 19.9){

    echo "SubPeso"; 

} elseif( $IMC == 20 || $IMC <= 24.9){

    echo "Normal"; 

}elseif( $IMC == 25 || $IMC <= 29.9){

    echo "Sobrepeso";

}elseif( $IMC == 30 || $IMC <= 39.9){

    echo "Obeso"; 
}else {

    echo "Obeso Mórbido";
}

