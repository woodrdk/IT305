<?php
/*
  * THis is a demo page for PHP basics
  * 10/14/2019
  * Rob Wood
  */

    // Turn on error reporting  -- this is critical
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // declare variable
    $title = "PHP Practice";
    $heading = "Happy Monday";
    //include function file
    include "functions.php";
    include "header.php";
?>



<body>
<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">PHP Practice File</h1>
        <p class="lead font-weight-bold">GRC Software Dev IT305</p>
        <p class="font-italic text-right">Robert Wood Jr.</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <p>
            <?php

            $email = "jshmoe@aol.com";
            $new_email = str_replace("jshmoe", "xyz", $email);
            echo "<p>$new_email</p><br/>";

            $phrase = " I like PHP ";
            echo $phrase.trim($phrase); // not done
            $len = strlen($phrase);
            echo "<br/>$len";
            $pos = strpos($phrase, "php");
            echo "<br/>$pos";
            $newPhrase = str_replace("like", "love", $phrase);
            echo "<br/>Replace like with love: $newPhrase";
            $caps = strtoupper($phrase);
            echo "<br/>Capitalize the sentence: $caps";
            echo "<br/><br/>";



            hello("Rob");


            echo "<p>Empty: ".isValidYear("")."</p>";
            echo "<p>2010: ".isValidYear("2010")."</p>";
            echo "<p>2OIO: ".isValidYear("2OIO")."</p>";
            echo "<p>201: ".isValidYear("201")."</p>";
            echo "<p>20101: ".isValidYear("20101")."</p>";
            echo "<p>2050: ".isValidYear("2050")."</p>";
            $var1 = 1000;
            $var2 = 500;

            echo "The average of $var1 and $var2 is ";
            average($var1, $var2);
            echo "<br/>";
            echo "The largest of $var2 and $var1 is ".largest($var1, $var2);
                    $heading.='!'; // adds exclamation point to heading
                    echo "<h1>  $heading</h1>";
                    echo "<h1>".$heading."</h1>";
                    echo '<h1>'.$heading.'</h1>';
                    $heading2 = '<h1> Happy Tuesday!</h1>';

                    echo $heading2;

                    echo 'Division <br/>';
                    echo '15 / 6 = '.(15 / 6).'<br/>';
                    echo '<br/>';
                    echo 'Modulus <br/>';
                    echo '15 % 6 = '.(15 % 6).'<br/>';

                    echo '++ increments <br/>';
                    echo '--  decrements <br/>';
                    $x = 2;
                    echo '<br/> x = 2, x++ showing x++, x will print out the following: <br/>';
                    echo $x++.",".$x.'<br/>';

                    $y=2;
                    echo 'answer:'.$y+$y.'<br/>';

                    echo 'Let\'s go! <br>';

            ?>
        </p>
    </div>

</div>
<!-- optional JavaScript -->
<!-- jQuery first, then Popper, then Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>

</script>
</body>
</html>