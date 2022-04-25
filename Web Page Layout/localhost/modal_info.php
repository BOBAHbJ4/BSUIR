<?php
//require_once("assets/templates/top.php");

$query = "SELECT * FROM categories";
$adr = mysqli_query($db_con,$query);
if(!adr){
    exit("query");
}
$table=mysqli_fetch_array($adr);
print_r($table);
?>

<?php
$query1 = "SELECT * FROM categories WHERE ";
$adr1 = mysqli_query($db_con,$query1);
if(!adr1){
    exit("query1");
}