<?php
    // Turn on error reporting  -- this is critical
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grade Convertor</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/jpg" href="../images/gears.ico">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- extra developer made .css -->
    <link rel="stylesheet" type="text/css" href="">

</head>
<body>

<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">Student Grade Converter</h1>
        <p class="lead font-weight-bold">GRC Software Dev Students Grades</p>
        <p class="font-italic text-right">Written by Robert Wood Jr.</p>
        <hr class="my-2">
    </div>
    <div class="container">
        <p>
            <?php
            $student = array("Jaime Rivera" => 3.4,
                             "Jocelyn Pritchard" => 2.7,
                             "Satinder Kaur" =>	4.0,
                             "Donald Johnson" => 1.5);

            function grade($grade){
                    if($grade >= 3.5 && $grade <= 4.0){
                        return "A";
                    }
                    else if($grade >= 3.0 && $grade <= 3.4){
                        return "B";
                    }
                    else if($grade >= 2.5 && $grade <= 2.9){
                        return "C";
                    }
                    else if($grade >= 2.0 && $grade <= 2.4){
                        return "D";
                    }
                    else{
                        return "F";
                    }
            }
            echo "<table style=\"width:50%\" class=\"table table-striped\"><thead class=\"thead-dark\">";
            echo "<tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">GPA</th>
                    <th scope=\"col\" class=\"text-center\">Letter Grade</th>
                  </tr>
                </thead>
                <tbody>";
            foreach ($student as $name => $gpa){
                echo "<tr><th scope=\"row\"></th><td>".$name."</td><td>".$gpa."</td><td class=\"text-center\">".grade($gpa)."</td></tr>";
            }
            echo "</tbody></table>";

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
