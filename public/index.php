<?php

require('../vendor/autoload.php');

$calculadora = new \Src\Classes\Calculadora();

$calculadora->setNum1(1);
echo $calculadora->getNum1();