<?php

// $array = [

//     1 => 'a',
//     '1' => 'b',
//     1.5 => 'c',
//     true => 'd'
// ];

// foreach ($array as $item) {

//     echo $item . PHP_EOL;    
// }




$ContaBancaria = [

    $conta1 = [
        'titular' => 'Jose Santos',
        'Saldo' => 1000.00

    ],

    $conta2 = [
        'titular' => 'Vinicius Jr',
        'Saldo' => 4500.00

    ],

    $conta3 = [
        'titular' => 'Maria do Rosario',
        'Saldo' => 6200.00

    ],
];

$ContaBancaria[$conta4] = [

        'titular' => 'Calica',
        'Saldo' => 1200.00



];

foreach($ContaBancaria as $indice => $conta){

    echo  $conta["titular"] . PHP_EOL;

}


// for($i = 0; $i <= count($ContaBancaria); $i++){

//     echo $ContaBancaria[$i]['titular'] . PHP_EOL;
// }


