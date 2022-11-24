<?php
require_once("init.php");
require_once("check-login.php");

$id = $_REQUEST["id"];
$name = $_REQUEST["name"];

switch($_REQUEST["oper"]) {

 case "add":
    $sql = "insert into sgroups (name) values ('"
            .$name."')";
    if(!mysqli_query($db_handler, $sql)) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        header('Content-Type: text/html; charset=utf-8');
        echo "Error adding group: ".mysqli_error($db_handler);
    }
    break;
 
 case "edit":
    $sql = "update sgroups
            set 
            name='".$name.
            "' where id=".$id;
    if(!mysqli_query($db_handler, $sql)) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        header('Content-Type: text/html; charset=utf-8');
        echo "Ошибка изменения справочника городов: ".mysqli_error($db_handler);
    }
    break;
 
 case "del":
    $sql = "DELETE FROM sgroups WHERE id=$id";
    if(!mysqli_query($db_handler, $sql)) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        header('Content-Type: text/html; charset=utf-8');
        echo "Error deleting group: ".mysqli_error($db_handler);
    }
    break;
 }

mysqli_close($db_handler);
?>