<?php
function findAngle($hour,$min)
{
 $h = ($hour * 360) / 12 + ($min * 360) / (12 * 60);

 $m = ($min * 360) / (60);

 $angle = abs($h - $m);

 if ($angle > 180) {
    $angle = 360 - $angle;
}

return $angle;
}

$hour = 9;
$min = 00;
echo findAngle($hour,$min)
?>