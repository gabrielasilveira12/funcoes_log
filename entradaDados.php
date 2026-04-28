<?php 

require_once "bibliotecaFuncoes.php";

use function geometria\areaQuadrado;
use function geometria\areaRetangulo;
use function geometria\areaTriangulo;
use function geometria\areaCirculo;
use function geometria\areaTrapezio;

echo "area do quadrado: ", areaQuadrado(3), "\n";
echo "area do retangulo: ", areaRetangulo(3, 4), "\n";
echo "area do triangulo: ", areaTriangulo(12, 10), "\n";
echo "area do circulo: ", areaCirculo(5), "\n";
echo "area do trapezio: ", areaTrapezio(1, 12, 03), "\n";