<?php 

require_once "bibliotecaFuncoes.php";

use function saude\calcularImc;
use function saude\valorIdealAgua;
use function saude\frequenciaCardiacaMaxima;
use function saude\converterLibrasParaQuilo;
use function saude\calcularCaloriasBasais;

echo "IMC: ", calcularImc(50, 149), "\n";
echo "valor de agua: ", valorIdealAgua(56), "\n";
echo "frequencia cardiaca: ", frequenciaCardiacaMaxima(16), "\n";
echo "libras para quilo: ", converterLibrasParaQuilo (30), "\n";
echo "calorias basais: ", calcularCaloriasBasais (70, 12, 167), "\n";