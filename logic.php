<?php

/*
while ($i > 0 && $i < 4) {
    echo $random;
    $i++;
}
*/

function show_random() {

    $words = array(
    'apples',
    'oranges',
    'milk',
    'cream',
    'long',
    'table',
    'odd',
    'uneven',
    'basketball',
    'outdoors',
    'path',
    'way',
    'eat',
    'restaurant',
    'people',
    'mister',
    'wants',
    'field',
    'trees',
    'full',
    'left',
    'optimized',
    'dog',
    'leaves',
    'wall',
    'new',
    'ghost',
    'face',
    'inspector',
    'deck',
    'low',
    'dirty',
    'party',
    'yodel',
    'capital',
    'cool',
    'alright',
    'rich',
    'program',
    'gospel',
    'preach',
    'master',
    'lion',
    'jungle',
    'city',
    'town',
    'wire',
    'vindicate',
    'wonderful',
    'winter',
    'weasel',
    'laughter',
    'link',
    'smash',
    'games',
    'after',
    'rectangular',
    'life',
    'coding',
    'umbrella',
    'zebra',
    'forest',
    'beaver',
    'zoo'
    );

    if( $_POST['number_of_words'] == 1 ) {
        echo $words[array_rand($words)];
    }
    if( $_POST['number_of_words'] == 2 ) {
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
    }
    elseif( $_POST['number_of_words'] == 3 ) {
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
    }
    elseif( $_POST['number_of_words'] == 4 ) {
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
    }
    elseif( $_POST['number_of_words'] == 5 ) {
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
    }
    elseif( $_POST['number_of_words'] == 6 ) {
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
    }
    elseif( $_POST['number_of_words'] == '' ) {
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
        echo $words[array_rand($words)];
    }
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