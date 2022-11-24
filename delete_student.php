<?php
require_once("init.php");

$ids=$_REQUEST["ids"];


$sql = "delete from students where id=".$ids;
if(!(mysqli_query($db_handler, $sql) && (mysqli_affected_rows($db_handler) != 0))) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        header('Content-Type: text/html; charset=utf-8');
        echo "Ошибка удаления студента: ".mysqli_error($db_handler);
        die();
}
?>