<?php
require_once("init.php");

$city=$_GET["name"];

$sql = "insert city(name) values('$name')";
$result = mysqli_query($db_handler,$sql) or die ("Невозможно выполнить SQL запрос!".mysqli_error($db_handler));
echo "<h1>HELP</h1>"
?>