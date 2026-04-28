<?php

//funções em PHP

namespace matematica;

function somar ($a, $b){
    return $a + $b;
} 

function subtrair ($a, $b){
    return $a - $b;
}

function divisao ($a, $b){
    return $a/$b;
}

function multiplicacao ($a, $b){
    return $a * $b;
}

namespace texto;
    function concatenar ($nome, $sobrenome){
        return $nome . " " . $sobrenome;
}

namespace logica; {
    function verificaidade($idade)
    {
        if ($idade >= 18) {
            return "Maior de idade";
        } else {
            return "Menor de idade";
        }
    }
}
    function verificaexercito ($sexo, $idade){
        if ($idade >= 18 && $sexo == "masculino"){
            return "voce está apto a servir o exercito";
        }
        else{
            return "voce não cumpre os requisitos.";
        } 
    }

namespace conversao;
    function conversaodolar ($dolar, $real){
        return $dolar / $real;
    }

    function conversaoeuro ($euro, $real){
        return $euro / $real;
    }

    function conversaopeso ($peso, $real){
        return $peso / $real;
    }

    function conversaolibra ($libra, $real){
        return $libra / $real;
    }

    function conversaoiene ($iene, $real){
        return $iene / $real;
    }

?>