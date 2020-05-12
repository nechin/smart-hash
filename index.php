<?php

require __DIR__ . '/src/Algorithms.php';
require __DIR__ . '/src/Hash.php';

use Nechin\SmartHash\SmartHash;

$data = 'Hello Word';
$hash = new SmartHash();
echo $hash->generate($data) . '<br>';
echo $hash->generate($data, 64) . '<br>';
echo $hash->generate($data, false, 'whirlpool');