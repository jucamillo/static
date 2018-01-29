<?php
require 'conta.php';


//echo "Contador" . $conta->numero . PHP_EOL;
$conta = conta::criaConta();
echo $conta->numero . PHP_EOL;
//echo "Contador" . $conta->numero . PHP_EOL;
$conta2 = conta::criaConta();
//echo "Contador" . $conta->numero . PHP_EOL;

echo $conta2->numero . PHP_EOL;
 ?>
