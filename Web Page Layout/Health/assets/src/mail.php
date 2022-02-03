<?php
require_once("../config/config.php");

    $query = "INSERT INTO contacts VALUES (NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['sex']."',
    '".$_POST['theme']."', '".$_POST['subject']."', '".$_POST['message']."')";
    $adr = mysqli_query($db_con, $query);
        if (!adr){
            exit("$query");
        }
        header("location: /");