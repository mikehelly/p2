<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>The Unidentifiable Password Generator</title>

    <?php require 'logic.php' ?>
    
    <link href="master.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css'>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

</head>

<body>

    <div class="lock">

    <div class="content">

        <h1 class="white">xkcd password generator</h1>

        <h2>your password is:</h2>

        <h3 class="passwordbox password"><?php echo wn1() ?></h3>

        <form name="options" method="POST" action="index.php">

            <label for="number_of_words"># of Words</label>
            <input type="text" name="number_of_words" id="number_of_words" value="1"><br>
            <label for="include_a_number">Include a Number</label>
            <input type="checkbox" name="include_a_number"><br>
            <label for="special_character">Use a Special Character</label>
            <input type="checkbox" name="special_character"><br>
            <label for="uppercase">First Letter Uppercase</label>
            <input type="checkbox" name="uppercase"><br>

            <input type="submit" class="button" value="generate" onclick="#">

        </form>

    </div>

    </div>

<pre>
    <?php print_r($_POST); ?>
</pre>

</body>
</html>