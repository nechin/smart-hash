<?php

require __DIR__ . '/src/Algorithm.php';
require __DIR__ . '/src/Generator.php';
require __DIR__ . '/src/Hash.php';

use Nechin\SmartHash\SmartHash;

$data = 'Hello Word';
echo '1. ' . SmartHash::hash($data) . '<br>';
echo '2. ' . SmartHash::hash('') . '<br>';
echo '3. ' . SmartHash::hash($data, 64) . '<br>';
echo '4. ' . SmartHash::hash($data, 80, 'sha256') . '<br>';
echo '5. ' . SmartHash::hash($data, 112) . '<br>';
echo '6. ' . SmartHash::hash($data, false, 'md6') . '<br>';
echo '7. ' . SmartHash::hash($data, false, 'sha384');