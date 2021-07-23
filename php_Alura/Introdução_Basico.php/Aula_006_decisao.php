<?php
$idade = 17;
$numeroDePessoas = 2;


echo "Voce tem 18 anos ou mais ?" . PHP_EOL; 
echo "a patir de 16 anos, somente acompanhado!" . PHP_EOL;

if($idade >= 18){

    echo "Voce pode entrar desacompanhado!";

} else if ($idade >= 16 && $numeroDePessoas >= 1) {
        echo "Voce tem $idade anos, está acompanhado(a), então pode entrar.";
    }
  else {
    echo "Voce so tem $idade anos. Não pode entrar";
  }  
