<?php

require '../../vendor/autoload.php';

$e = new \kfilin\expression\Add(7, 6);

echo "Ans: " . $e->calc() . PHP_EOL ;
echo "Explain: " . $e->explain() . PHP_EOL ;
