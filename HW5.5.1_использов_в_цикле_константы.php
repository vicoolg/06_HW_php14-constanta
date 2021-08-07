<?php

$limit = 100;
$sum = 0;
for ($i=1; $i < $limit + 1; $i++) {
    define("NUMBER",5);  
    if ($i % NUMBER == 0) {
        $sum = $sum + $i;
    }         
}
echo $sum . PHP_EOL;