<?php

/*
while ($i > 0 && $i < 4) {
    echo $random;
    $i++;
}
*/

function wn1() {

    $words = array(
    'apple',
    'orange',
    'milk',
    'cream',
    'long',
    'table',
    'odd',
    'uneven',
    'basketball',
    'outdoor',
    'path',
    'way',
    'eat',
    'restaurant',
    'people',
    'mister',
    'wants',
    'field',
    'tree',
    'full',
    'left',
    'optimized',
    'dog',
    'leaf',
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
    'zoo',
    'clean',
    'type',
    'skateboard',
    'album'
    );

    
    
    echo $words[array_rand($words)];
}

function show_random_number() {

    $numbers = array(
        '1',
        '2',
        '3',
        '4',
        '5',
        '6',
        '7',
        '8',
        '9',
        '0'
        );

    echo $numbers[array_rand($numbers)];
}

?>