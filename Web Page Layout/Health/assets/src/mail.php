<?php
    $db_host = 'localhost';
    $db_user = 'root';
    /*$db_password = 'root';*/
    $db_db = 'health_nutrition';
    $db_con = mysqli_connect($db_host, $db_user, $db_password, $db_db);
    if (!$db_con){
        exit('error connect');
    }
/*
echo "<pre>";
print_r($_POST);
echo "</pre>";
exit();
*/
    $query = "INSERT INTO contacts VALUES (NULL, '".$_POST['name']."', '".$_POST['email']."', '".$_POST['sex']."',
    '".$_POST['theme']."', '".$_POST['subject']."', '".$_POST['message']."')";
    $adr = mysqli_query($db_con, $query);
        if (!adr){
            exit("$query");
        }
        header("location: /");