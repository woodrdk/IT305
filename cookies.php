<?php
    // Turn on error reporting  -- this is critical
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    setcookie("name", "Cookie Monster");
    setcookie("car", "Plymouth Superbird", time() + 60 * 60 * 24 * 7);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Cookies Demo</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">Cookies practice</h1>
        <p class="lead font-weight-bold">GRC</p>
        <p class="font-italic text-right">Written by Robert Wood Jr.</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <?php
        if(isset($_COOKIE["name"])){
        echo "Hello, ".$_COOKIE["name"];
        }
        else{
        echo "I forgot your info.";
        }
        ?>
    </div>

</div>
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>

