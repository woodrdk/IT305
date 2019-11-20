<?php
    if (!empty($_POST["fruit"]))
    {
    //make persistent cookie for one day
    setcookie("fruit",$_POST["fruit"], mktime()+60*60*24);
    }
    if(!empty($_POST["name"])){
        setcookie("name",$_POST["name"], mktime()+60*60*24);
    }
    //redirect
    header("Location: showFruit.php");
?>
