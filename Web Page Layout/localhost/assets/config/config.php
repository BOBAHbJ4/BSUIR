<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'health_nutrition';
$db_con = mysqli_connect($db_host, $db_user, $db_password, $db_db);
if (!$db_con){
    exit('error connect');
}