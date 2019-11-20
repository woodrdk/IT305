<?php
/*
  * THis is a demo page for PHP basics
  * 10/28/2019
  * Rob Wood
  */

    // Turn on error reporting  -- this is critical
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include "header.php";
?>



<body>
<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">PHP Array Practice File</h1>
        <p class="lead font-weight-bold">GRC Software Dev IT305</p>
        <p class="font-italic text-right">Robert Wood Jr.</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <p>
            <?php

            echo "<h3>Explode</h3>";
            $movies = "Jurrassic Park, Top Gun, Days of Thunder";
            $moviesArray = explode(", ", $movies);
            echo "<ul>";
            foreach($moviesArray as $m){
                echo "<li>$m</li>";
            }
            echo "</ul>";

            echo "<h3>Implode</h3>";
            $newMovieString = implode("*", $moviesArray);





            // var_dump($_SERVER);

            // echo "Username is ".$_SERVER['USER']."<br>";
            // $animal = "hyena";
            $animal[] = "Ostrich";
            $animal[] = "Anteater";
            $animal[] = "Monkey";
            $animal[] = "Dog";
            $animal[] = "Tiger";
            // if wrote $animal = "monkey"; would erase the array
            //var_dump($animal)."<br>";

            echo "The first animal is ".$animal[0]."<br>";

            $animals = array("Pig", "Duck","Goose");
            //var_dump($animals)."<br>";

            for($i=0; $i<sizeof($animals); $i++){
                echo $animals[$i]."<br>";
            }

            echo "<br><br>";

            foreach ($animals as $a){
                echo "$a<br>";
            }


            $names = array("Rob", "Draven", "Kellan", "Hillary", "Bob");
            var_dump($names)."<br>";
            echo $names[0]."<br>"."<br>";
            echo $names[sizeof($names)-1]."<br>"."<br>";
            for($i=0; $i<sizeof($names); $i++){
                echo $names[$i]."<br>";
            }

            echo "<br><br>";

            foreach ($names as $n){
                echo "$n<br>";
            }

            // builds an associative array
            $todo = array(
                    "Mon" => "Clean House",
                    "Tues" => "Go to library",
                    "Wed" => "Study for midterm"
            );
            $todo['Thurs'] = "Take midterm";

            // for each loop print of an associative array
            foreach($todo as $day=>$task){
                echo "On $day I will $task<br>";
            }


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