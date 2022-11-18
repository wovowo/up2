<?php
require_once("init.php");

$id=$_REQUEST["id"];


$sql = "insert prepod(fam,name,otch) 
        values ('$lname','$fname','$otch')";
if(!mysqli_query($db_handler, $sql)) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    header('Content-Type: text/html; charset=utf-8');
    echo "Ошибка добавления препрдавателя: ".mysqli_error($db_handler);
    }
$sql = "SELECT id, concat(fam, ' ', name, ' ', otch) as name FROM prepod ORDER BY name";
$result = mysqli_query($db_handler,$sql) or die ("Невозможно выполнить SQL запрос в 'get-prepod.php'!".mysqli_error($db_handler));
    
$response ='<table>';
while($row = mysqli_fetch_array($result)) {
    $response .= '<tr>';
    $response .= '<td>'.$row['id'].'</td><td>'.$row['name'].'</td>';
    $response .= '<td><button onclick="del_st"('.$row['id'].')>Delete</button></td>';
    $response .= '</tr>';
}
$response .= '</table>';

echo $response;
?>  
