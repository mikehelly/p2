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

<body class="blackbg">

    <div class="lock">

    <div class="content">

        <h1>xkcd password generator</h1>

        <h2>your password is:<h2>

            <h3 class="passwordbox password">PASSWORD-HERE</h3>

    </div>

    </div>

</body>
</html>