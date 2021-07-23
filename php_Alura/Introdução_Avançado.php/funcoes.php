<?php

echo 'Ola, arquivo de funcoes aqui!!!';


//Função Para sacar dinheiro da conta
function sacar(array $conta, float $valorSacar): array
{


    if ($valorSacar > $conta['saldo']){

        exibeMensagem('Voce não pode sacar este valor');
    
    } else {
    
        $conta['saldo'] -= $valorSacar;
    }

    return $conta;

}

//Função para depositar dinheiro na conta
function deposito(array $conta, float $depositar): array
{


    if($depositar > 0 ){
        
        $conta['saldo'] += $depositar;
    
    } else {

         exibeMensagem("Voce não pode depositar valor negativo!!!");
    }
    return $conta;
}

//Função para exibir mensagem 
function exibeMensagem(string $mensagem)
{

    echo $mensagem . PHP_EOL;

}


function titularDaConta(array $conta)
{

        $conta['titular'] = mb_strtoupper($conta['titular']);

}