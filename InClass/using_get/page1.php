<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Using Get Demo</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">Get practice</h1>
        <p class="lead font-weight-bold">GRC</p>
        <p class="font-italic text-right">Written by Robert Wood Jr.</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <a href="getpage.php?source=page1">Go to get</a>

        <?php
            echo "<br>".date('m-d-Y', strtotime('2005-05-05'))."<br>";

            echo date('m-d-Y', strtotime('May 10, 2007'))."<br>";
            echo date('m-d-Y', strtotime('01/01/2001'))."<br>";

            $userEnter = '05-05-2010';
        $sqlDate = date('Y-m-d', strtotime($userEnter));
        echo $sqlDate."<br>";
        ?>

    </div>

</div>
<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
