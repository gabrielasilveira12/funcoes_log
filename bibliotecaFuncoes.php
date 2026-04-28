<?php

namespace saude {
    function calcularImc ($peso, $altura){
        return $peso / $altura * $altura;
    }

    function valorIdealAgua ($peso){
        return $peso * 35;
    }
     
    function frequenciaCardiacaMaxima ($idade){
        return 220 - $idade;
    }

    function converterLibrasParaQuilo($libras){
        return $libras * 0.4536;
    }

    function calcularCaloriasBasais($peso, $idade, $altura){
        return  655 + (9.6 * $peso) + (1.8 * $altura) - (4.7 * $idade);
    }

}