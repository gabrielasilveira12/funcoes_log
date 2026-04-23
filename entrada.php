<?php

require_once "biblioteca.php";

use function matematica\somar;
use function texto\concatenar;
use function logica\verificaidade;
use function logica\verificaexercito;

echo "soma: ", somar(1, 1), "\n";
echo "nome completo: ", concatenar("gabriela", "silveira"), "\n";
echo "status: ", verificaidade(20), "\n";
echo "resultado: ", verificaexercito("masculino", 20);
?> 