<?php
/*
  * THis is a palindrome checker
  * 10/23/2019
  * Rob Wood
  * Kerrie Low
  */

// Turn on error reporting  -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);

//include function file

include "header.php";
include "../functions.php";
?>


<body>

<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">PHP Palindrome File</h1>
        <p class="lead font-weight-bold">GRC Software Dev IT305</p>
        <p class="font-italic text-right">Robert Wood Jr.</p>
        <p class="font-italic text-right">Kerrie Low</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <h2>Palindrome Checker</h2>
        <h3>Enter a word or phrase to check to see if its a palindrome </h3>
        <form method="post" action="#">
            <label>
                Word or
                phrase:
                <input type="text" name="number"></label>
            <input type="submit" value="Go">
            </label>
        </form>
        <?php

        ?>


    </div>

</div>

</body>
</html>