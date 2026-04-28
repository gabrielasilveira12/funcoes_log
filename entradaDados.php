<?php 

namespace conversao;

require_once "bibliotecaFuncoes.php";
use function conversao\conversaodolar;
use function conversao\conversaoeuro;
use function conversao\conversaopeso;
use function conversao\conversaolibra;
use function conversao\conversaoiene;

$opcoes = "";
$op = "";

while ($opcoes != "4"){
    echo ">>MENU<< \n, escolha a opção: \n, 1-Conversão \n, 2-Geometria \n, 3-Saude \n, 4-sair \n";

$opcoes = readline(">>");

switch ($opcoes){
    case 1:
        $op = "";
        while ($op != "6") {

echo ">>>>MENU<<<< \n, escolha a opção: \n, 1-Conversão dolar \n, 2-Conversão euro \n, 3-Conversão peso \n, 4-Conversão libra \n, 5-Conversão iene \n, 6-Sair \n";

$op = readline (">> ");


switch ($op) {
    case 1: 
        $dolar = readline ("digite a quantidade de dolares: ");
        $cotadolar = readline ("digite o valor da cotação do dolar:");
            echo "dolar para real: ", conversaodolar ($dolar, $cotadolar), "\n\n"; 
        break;

     case 2:
        $euro = readline ("digite a quantidade de euro: "); 
        $cotaeuro = readline ("digite o valor da cotação do euro: ");
            echo "euro para real: ", conversaoeuro($euro, $cotaeuro), "\n\n";
        break;

    
     case 3:
        $peso = readline ("digite a quantidade de peso: "); 
        $cotapeso = readline ("digite o valor da cotação do peso: ");
            echo "peso para real: ", conversaopeso($peso, $cotapeso), "\n\n";
        break;

    
     case 4: 
         $libra = readline ("digite a quantidade da libra: "); 
        $cotalibras = readline ("digite o valor da cotação da libra: ");
            echo "libra para real: ", conversaolibra ($libra, $cotalibras), "\n\n";
        break;

   
     case 5: 
         $iene = readline ("digite a quantidade de iene: "); 
        $cotaiene = readline ("digite o valor da cotação do iene: ");
            echo "iene para real: ", conversaoiene($iene, $cotaiene), "\n\n";
        break;

   
     case 6: 
        echo "saindo...\n";
        break;

    default:
    echo "opção inválida! \n";
    break;

 }
}
break;
}

}