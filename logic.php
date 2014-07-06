<?php

/*
while ($i > 0 && $i < 4) {
    echo $random;
    $i++;
}
*/

if(isset($_POST['number_of_words'])){ $number_of_words = $_POST['number_of_words']; }

function show_random() {

    global $number_of_words;

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

$dashwords = array(
    '-apples',
    '-oranges',
    '-milk',
    '-cream',
    '-long',
    '-table',
    '-odd',
    '-uneven',
    '-basketball',
    '-outdoors',
    '-path',
    '-way',
    '-eat',
    '-restaurant',
    '-people',
    '-mister',
    '-wants',
    '-field',
    '-trees',
    '-full',
    '-left',
    '-optimized',
    '-dog',
    '-leaves',
    '-wall',
    '-new',
    '-ghost',
    '-face',
    '-inspector',
    '-deck',
    '-low',
    '-dirty',
    '-party',
    '-yodel',
    '-capital',
    '-cool',
    '-alright',
    '-rich',
    '-program',
    '-gospel',
    '-preach',
    '-master',
    '-lion',
    '-jungle',
    '-city',
    '-town',
    '-wire',
    '-vindicate',
    '-wonderful',
    '-winter',
    '-weasel',
    '-laughter',
    '-link',
    '-smash',
    '-games',
    '-after',
    '-rectangular',
    '-life',
    '-coding',
    '-umbrella',
    '-zebra',
    '-forest',
    '-beaver',
    '-zoo'
    );

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

    //number of words 1
    if( $number_of_words == 1 ) {
        echo $words[array_rand($words)];
    }
    //number of words 2
    elseif( $number_of_words == 2 ) {
        echo $words[array_rand($words)];
        echo $dashwords[array_rand($dashwords)];
    }
    //number of words 3
    elseif( $number_of_words == 3 ) {
        echo $words[array_rand($words)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
    }
    //number of words 4
    elseif( $number_of_words == 4 ) {
        echo $words[array_rand($words)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
    }
    //number of words 5
    elseif( $number_of_words == 5 ) {
        echo $words[array_rand($words)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
    }
    //number of words 6
    elseif( $number_of_words == 6 ) {
        echo $words[array_rand($words)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
    }
    //number of words empty
    elseif( $number_of_words == '' ) {
        echo $words[array_rand($words)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
        echo $dashwords[array_rand($dashwords)];
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