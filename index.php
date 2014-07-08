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

    <link href='http://fonts.googleapis.com/css?family=Kameron:400,700' rel='stylesheet' type='text/css' />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />

</head>

<body>

    <div class="lock">

    <div class="content">

        <h1 class="white">xkcd password generator</h1>

        <h2>your password is:</h2>

        <h3 class="passwordbox password"><?php echo $password ?></h3>

        <form name="options" method="POST" action="index.php">

            <label for="number_of_words">number of words</label>
            <input type="text" name="number_of_words" id="number_of_words" maxlength="1"><br>
            <label for="include_a_number">include a number</label>
            <input type="checkbox" name="include_a_number"><br>
            <label for="special_character">use a special character</label>
            <input type="checkbox" name="special_character"><br>
            <label for="uppercase">first letter uppercase</label>
            <input type="checkbox" name="uppercase"><br>

            <input type="submit" class="button" value="generate" onclick="#">

        </form>

    </div>

    </div>

        <h2 id="center">what is an xkcd password?</h2>

        <div class="description">

            <p class="description">An xkcd password generator produces a password that is both easy to remember and tough for hackers to crack. My generator can spit out up to 9 word passwords. The real words allow for the possibility that you might remember the password you just created.  Add a number or symbol if you're looking to get extra tricky.</p>

        </div>

        <a href="password_strength.png">
        <img class="description" src="password_strength_504.png" />
        </a>

</body>
</html>