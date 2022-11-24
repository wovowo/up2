<?php
require_once("init.php");
require_once("check-login.php");

$id = $_REQUEST["id"];
$fam = $_REQUEST["fam"];
$name = $_REQUEST["name"];
$otch = $_REQUEST["otch"];
$date_r = $_REQUEST["date_r"];
$tel = $_REQUEST["tel"];
$city = $_REQUEST["city"];
$group = $_REQUEST["group"];

switch($_REQUEST["oper"]) {

 case "add":
    $sql = "insert into students (fam,  name, otch, date_r, tel, city_id, group_id) values ('"
            .$fam."',".$name.",".$otch.",".$date_r.",".$tel.",".$city.",".$group.")";
    if(!mysqli_query($db_handler, $sql)) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        header('Content-Type: text/html; charset=utf-8');
        echo "Error adding student: ".mysqli_error($db_handler);
    }
    break;
 
 case "edit":
    $sql = "update students
            set 
            name='".$name.
            ",fam=".$fam.
            ",otch=".$otch.
            ",date_r=".$date_r.
            ",tel=".$tel.
            "',city_id=".$city.
            ",group_id=".$group.
            " where id=".$id;
    if(!mysqli_query($db_handler, $sql)) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        header('Content-Type: text/html; charset=utf-8');
        echo "Ошибка изменения студента: ".mysqli_error($db_handler);
    }
    break;
 
 case "del":
    $sql = "DELETE FROM students WHERE id=$id";
    if(!mysqli_query($db_handler, $sql)) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        header('Content-Type: text/html; charset=utf-8');
        echo "Error deleting student: ".mysqli_error($db_handler);
    }
    break;
 }

mysqli_close($db_handler);
?>