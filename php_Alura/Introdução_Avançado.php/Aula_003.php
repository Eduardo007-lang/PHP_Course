<?php
// Array Associativa

$contasCorrentes = [

    '123.456.896-10' => [

        'titular' => 'Eduardo',
        'saldo' => 1000

    ],
    '236.541.789-71' => [
    
        'titular' => 'Maria',
        'saldo' => 1000
    ],
     '101.453.697-87' => [
    
        'titular' => 'Alberto',
        'saldo' => 3

    ],

];

//Formato de adicionar dados com [] chaves, adicionara o dado com a chave numerica 
$contasCorrentes['123.456.897-21'] = [
        'titular' => 'Claudia',
        'saldo' => 2000
];



foreach ($contasCorrentes as $cpf => $conta) {

      echo $cpf . " " .$conta['titular'] . PHP_EOL;
}




