<?php

require_once __DIR__ . '/vendor/autoload.php';

$customer = new \Darell\BelajarPhpComposer\Customer('Darell');
echo $customer->sayHallo('Mamat') . PHP_EOL;
