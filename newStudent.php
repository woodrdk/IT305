<?php

/*
  * New student page
  * 11//2019
  * Rob Wood
  */

// Turn on error reporting  -- this is critical
ini_set('display_errors', 1);
error_reporting(E_ALL);
require '/home/rwoodgre/connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GRC Student</title>
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head>
<body>
<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">New Student</h1>
        <p class="lead font-weight-bold">GRC Student Database InClass</p>
        <p class="font-italic text-right">Written by Robert Wood Jr.</p>
        <hr class="my-2">
    </div>
    <div class="container">
    <h3>Add a New Student</h3>

    <form id="student-form" action="add-student.php" method="post">

        <div class="form-group">
            <label for="sid">SID</label>
            <input type="text" class="form-control"
                   id="sid" name="sid">
        </div>
        <div class="form-group">
            <label for="firstName">First name</label>
            <input type="text" class="form-control"
                   id="firstName" name="firstName">
        </div>
        <div class="form-group">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control"
                   id="lastName" name="lastName">
        </div>
        <div class="form-group">
            <label for="birthdate">Birthdate</label>
            <input type="text" class="form-control"
                   id="birthdate" name="birthdate">
        </div>
        <div class="form-group">
            <label for="gpa">GPA</label>
            <input type="text" class="form-control"
                   id="gpa" name="gpa">
        </div>
        <div class="form-group">
            <label for="advisor">Advisor</label>
            <select  class="form-control"
                   id="advisor" name="advisor">
                <option value="none">--Select--</option>
                <?php
                    // query the database
                    $sql = "SELECT advisor_id, advisor_first, advisor_last FROM advisor";
                    $result = mysqli_query($cnxn, $sql);
                    // process the result
                    while($row = mysqli_fetch_assoc($result)){
                        $Id = $row['advisor_id'];
                        $first = $row['advisor_first'];
                        $last = $row['advisor_last'];
                        echo "<option value='$Id'>$last, $first</option>";
                    }

                ?>
            </select>
        </div>
        <button id="submit" type="submit" class="btn btn-primary">
            Submit
        </button>
    </form>
        </div>
</div>

<script src="//code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
