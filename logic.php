<?php

if(isset($_POST['number_of_words'])){ $number_of_words = $_POST['number_of_words']; }

if(isset($_POST['include_a_number'])){ $include_a_number = $_POST['include_a_number']; }

if(isset($_POST['special_character'])){ $special_character = $_POST['special_character']; }

if(isset($_POST['uppercase'])){ $uppercase = $_POST['uppercase']; }

$word_list = file('words.txt');

$numbers = file('numbers.txt');

$characters = file('special_characters.txt');

global $number_of_words;

global $include_a_number;

global $special_character;

global $uppercase;

$password = '';

//$dashpassword = '';

for ($i=0; $i < $number_of_words; $i++) {
	//echo $word_list[array_rand($word_list)];
	$password = trim($password); 
	$password .= $word_list[array_rand($word_list)];
	//$dashpassword = implode('-', $words[array_rand($words)]);	
}

	/*
	if ($i < $number_of_words - 1) {
		echo 'in the if loop';
		$password .= $word_list[array_rand($word_list)];
	}
	*/

	if( $include_a_number == 'on' ) {
		$password = trim($password);
		$password .= $numbers[array_rand($numbers)];
	}

	if( $special_character == 'on' ) {
		$password = trim($password);
		$password .= $characters[array_rand($characters)];
	}

	if ( $uppercase == 'on' ) {
		$password = ucfirst($password);
	}

?>