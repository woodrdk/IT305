

<?php


// Turn on error reporting  -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Added Table</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/jpg" href="../../images/gears.ico">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- extra developer made .css -->
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">




</head>
<body>

<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">Student Added PHP Check</h1>
        <p class="lead font-weight-bold">GRC Student Database InClass</p>
        <p class="font-italic text-right">Written by Robert Wood Jr.</p>
        <hr class="my-2">
    </div>
    <div class="container">

        <p>

        <?php
            /* var_dump($_POST);
            ["sid"]=>"8787878"
            ["firstName"]=>"Rob"
            ["lastName"]=>"Wood"
            ["birthdate"]=>"1995-05-05"
            ["gpa"]=>"1.0"
            ["advisor"]=>"1"
            */
            //Connect to db
            require ('/home/rwoodgre/connect.php');
            //Validate the data
            $isValid = true;
            if (isset($_POST['sid']) && strlen($_POST['sid']) == 11) {
                $sid = mysqli_real_escape_string($cnxn, $_POST['sid']);
            }
            else {
                echo "<p>SID is required and must be 11 characters</p>";
                $isValid = false;
            }
            if (isset($_POST['firstName'])) {
                $firstName = mysqli_real_escape_string($cnxn, $_POST['firstName']);
            } else {
                echo "<p>First name is required</p>";
                $isValid = false;
            }
            $lastName = mysqli_real_escape_string($cnxn, $_POST['lastName']);
            $birthdate = mysqli_real_escape_string($cnxn, $_POST['birthdate']);
            $gpa = mysqli_real_escape_string($cnxn, $_POST['gpa']);
            /*
            if (isset($_POST['gpa'])
                && $_POST['gpa'] > 0.0
                && $_POST['gpa'] < 4.0) {
                $gpa = $_POST['gpa'];
            } else {
                echo "<p>GPA is required and must be 0-4</p>";
                $isValid = false;
            }
            */
            $advisor = mysqli_real_escape_string($cnxn, $_POST['advisor']);
            //Insert row if data is valid
            if ($isValid) {
                $sql = "INSERT INTO student
                        VALUES ('$sid', '$firstName', 
                        '$lastName', '$birthdate',
                        '$gpa', '$advisor')";
                echo $sql; //copy/paste into phpMyAdmin to test
                $result = mysqli_query($cnxn, $sql);
                //If successful, print summary
                if ($result) {
                    echo "<p>SID: $sid</p>";
                    echo "<p>Student name: $firstName $lastName</p>";
                    echo "<p>Birthdate: $birthdate</p>";
                    echo "<p>GPA: $gpa</p>";
                    echo "<p>Advisor: $advisor</p>";
                }
            }
        ?>



        </p>
        <a href="students.php">View Students</a>
    </div>

</div>

<!-- optional JavaScript -->
<!-- jQuery first, then Popper, then Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>


</html>
