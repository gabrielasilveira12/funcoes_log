<?php 

require_once "biblioteca.php";

//namespaceconversao:
use function conversao\conversaodolar;
use function conversao\conversaoeuro;
use function conversao\conversaopeso;
use function conversao\conversaolibra;
use function conversao\conversaoiene;

echo "valor do dolar: ", conversaodolar (100, 5), "\n";
echo "valor do euro: ", conversaoeuro (100, 5.85), "\n";
echo "valor do peso: ", conversaopeso (100, 0.0035), "\n";
echo "valor da libra: ", conversaolibra (100, 6.74), "\n";
echo "valor do iene: ", conversaoiene (100, 0.031), "\n"; 