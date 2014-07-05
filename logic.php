<?php

$words = array(
    'apples',
    'ranges',
    'milk',
    'cream',
    'long',
    'table'
    );

$i = 0;

$random = $words[array_rand($words)];

while ($i > 0 && $i < 4) {
    echo $random;
    $i++;
}

/*
if($time >= 5 && $time < 11) {
        $color = '#865f86';
    }
    elseif ($time >= 11 && $time < 16) {
        $color = '#2c87c8';
    }
    elseif ($time >= 16 && $time < 20) {
        $color = '#c7b02f';
    }
    else {
    	$color = '#180629';
    }
*/

?>