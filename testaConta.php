<?php
require 'conta.php';


echo "Contador" . conta::$contador . PHP_EOL;
$conta = conta::criaConta();
echo "Contador" . conta::$contador . PHP_EOL;
$conta2 = conta::criaConta();
echo "Contador" . conta::$contador . PHP_EOL;
 ?>
