

<?php

/*
  * THis is a demo page for PHP sql
  * 11/4/2019
  * Rob Wood
  */

    // Turn on error reporting  -- this is critical
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Table</title>
    <!-- FAVICON -->
    <link rel="icon" type="image/jpg" href="../../images/gears.ico">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- extra developer made .css -->
    <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">


</head>
<body>

<div class="container" id="main">
    <div class="jumbotron bg-success" >
        <h1 class="display-4 font-weight-bold">Student PHP Check</h1>
        <p class="lead font-weight-bold">GRC Student Database InClass</p>
        <p class="font-italic text-right">Written by Robert Wood Jr.</p>
        <hr class="my-2">
    </div>
    <div class="container">

        <p>
            <?php
            require '/home/rwoodgre/connect.php';
            echo "<h3>Student Summary</h3>";

            // Define the query
            // $sql = 'SELECT s.sid, s.first,s.last,s.advisor,a.advisor_id,a.advisor_first,a.advisor_last
            // FROM student s, advisor a
            // WHERE a.advisor_id = s.advisor';

            $sql ='SELECT sid, first, last, gpa, birthdate, advisor.advisor_id, advisor.advisor_first, advisor.advisor_last
                   FROM `student`, advisor
                   WHERE advisor.advisor_id = student.advisor
                   ORDER BY last, first;';

            // send query to the database
            $result = mysqli_query($cnxn,$sql);
            // var_dump($result);
            ?>
        <table id="students" class="display">
            <thead>
                <tr>
                    <th>Sid</th>
                    <th>Student Name</th>
                    <th>GPA</th>
                    <th>Birthdate</th>
                    <th>Advisor ID</th>
                    <th>Advisor Name</th>
                </tr>
            </thead>
            <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
                    $sid = $row['sid'];
                    $sFirst = $row['first'];
                    $sLast = $row['last'];
                    $gpa = $row['gpa'];
                    $bday = $row['birthdate'];
                    $advisorID = $row['advisor_id'];

                    $aFirst = $row['advisor_first'];
                    $aLast = $row['advisor_last'];

                    echo "<tr><td>$sid</td>
                        <td>$sFirst, $sLast</td>
                        
                        <td>$gpa</td>
                        <td>$bday</td>
                        
                        <td>$advisorID</td>
                        <td> $aFirst, $aLast</td>";
                }
            ?>
            </tbody>
        </table>

        </p>
    </div>
    <div>
        <a href="newStudent.php">New Student</a>
    </div>
    <div>
        <?php
        $sql = 'SELECT s.sid, s.first AS student_first, s.last AS student_last, s.advisor, a.advisor_id,
        a.advisor_first, a.advisor_last
        FROM student s, advisor a
        WHERE a.advisor_id = s.advisor
        ORDER BY student_last, student_first';
        //Send the query to the database
        $result = mysqli_query($cnxn, $sql);
        //var_dump($result);
        //Print the results
        while ($row = mysqli_fetch_assoc($result)) {
        $sid = $row['sid'];
        $sFirst = $row['student_first'];
        $sLast = $row['student_last'];
        $aFirst = $row['advisor_first'];
        $aLast = $row['advisor_last'];
        echo "$sid - $sFirst $sLast, $aFirst $aLast<br>";
        }
        ?>
    </div>
</div>

<!-- optional JavaScript -->
<!-- jQuery first, then Popper, then Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- imports the jQuery dataTables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<!--<script type="text/javascript" src =https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js></script>-->
<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    // $(document).ready( function () {
    //     $('#students').DataTable();
    // } );

    $('#students').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
</script>
</body>

