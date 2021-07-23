<?php
//Caso o arquivo a ser incluído não seja encontrado, require para a execução do programa enquanto include permite que continue.

//Avisa quando tem um erro, porem continua execuntando o codigo;
//include 'funcoes.php';
//Avisa quando tem o erro, e para de executar o codigo onde esta acontecendo o erro;
require 'funcoes.php';







$contasCorrentes = [

    '123.456.896-10' => [

        'titular' => 'Eduardo',
        'saldo' => 300

    ],
    '236.541.789-71' => [
    
        'titular' => 'Maria',
        'saldo' => 1300
    ],
     '101.453.697-87' => [
    
        'titular' => 'Alberto',
        'saldo' => 2600

    ],

];


$contasCorrentes['110.157.858-25'] = [

        'titular' => 'Mario',
        'saldo' =>  10


    ];


    $contasCorrentes['110.157.858-25'] = deposito($contasCorrentes['110.157.858-25'], 150);



    foreach ($contasCorrentes as $cpf => $contas) {

        exibeMensagem (

            "$cpf {$contas['titular']} {$contas['saldo'] } "
            
        );
}