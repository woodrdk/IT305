<?php
/*
  * THis is a buckle page for PHP
  * 10/14/2019
  * Rob Wood
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
        <h1 class="display-4 font-weight-bold">PHP Buckle File</h1>
        <p class="lead font-weight-bold">GRC Software Dev IT305</p>
        <p class="font-italic text-right">Robert Wood Jr.</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <h2>Buckle my shoe</h2>
        <h3>Enter a number 1-10 to see what you should do! </h3>
        <form method="post" action="#">
            <label>
                Number:
                <input type="text" name="number"></label>
            <input type="submit" value="Go">
            </label>
        </form>
        <?php
        if(isset($_POST['number'])){
            $num = $_POST['number'];
            buckleMsg($num);
        }


        ?>


    </div>

</div>

</body>
</html>