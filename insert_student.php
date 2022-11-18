<?php
require_once("init.php");

$fname=$_GET["fname"];
$otch=$_GET["otch"]
$lname=$_GET["lname"];
$date1=$_GET["date_r"];
$tel=$_GET["tel"];

$sql = "insert students(fam, name, otch, date_r, tel, city_id, group_id) 
        values('$lname', '$fname', '$otch', '$date_r', '$tel', 1, 1)";
$result = mysqli_query($db_handler,$sql) or die ("Невозможно выполнить SQL запрос!".mysqli_error($db_handler));
echo "<h1>HELP</h1>"
?>