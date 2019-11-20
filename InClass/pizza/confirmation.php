<?php
    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $method = $_POST['method'];
    $toppings = $_POST['toppings'];
    $size = $_POST['size'];
    $address = $_POST['address'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rob's Pizza Confirmation</title>
</head>
<body>
    <h1>Thank you for your order.</h1>
    <h2>Order Summary:</h2>

    <p>First Name; <?php echo $first.' '.$last; ?></p>
    <p>Method of delivery: <?php echo $method?></p>
    <p>Address: <?php echo $address?></p>
    <p>Size:
        <?php
            $validSizes = array("none", "personal", "small", "medium", "large", "family");
            if(in_array($size,$validSizes))
                echo "$size";
            else
                echo "<p>Your size,  $size, is an Invalid Size.</p>";
        ?>
    </p>
    <p>Toppings:<br/>

        <?php
        foreach($toppings as $x => $x_value) {
            echo  $x_value;
            echo "<br>";
        } ?> </p>


    <pre>
        <?php
          //  var_dump($_POST);
       // "hello world";
        ?>
    </pre>
    <?php
        $email  = "tordrwood@gmail.com";
        $email_body = "Order summary -- \r\n";
        $email_body .= "Name: $first $last \r\n";
        $email_subject = "New Order Placed";
        $to = $email;
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email \r\n";
        $success = mail($to,$email_subject,$email_body,$headers);
        // print final confirmation
        $msg = $success ? "Your order has been successfully placed" : "We're sorry there was a problem with your order.";
        echo"<p>$msg</p>";

    $email = "tordrwood@gmail.com";
    $email_body = "Order Summary --\r\n";
    $email_body .= "Name:  $first $last\r\n";
    $email_subject = "New Order Placed";
    $to = $email;
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email \r\n";
    $success = mail($to, $email_subject, $email_body, $headers);
    //Print final confirmation
    $msg = $success ? "Your order was successfully placed."
        : "We're sorry. There was a problem with your order. Please call (333)222-1111.";
    echo "<p>$msg</p>";

    ?>
</body>
</html>