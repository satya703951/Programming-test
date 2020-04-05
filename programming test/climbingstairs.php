<?php
$n = 4;
$steps = [];
$steps[0] = 1;
$steps[1] = 2;
for($i=2;$i < $n;$i++)
{
    $steps[$i] = $steps[$i -1] + $steps[$i - 2];
}

print_r($steps[$n -1]);


?>