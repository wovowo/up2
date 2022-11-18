<?php
require_once("init.php");

$fname=$_REQUEST["fname"];
$otch=$_REQUEST["otch"];
$lname=$_REQUEST["lname"];
$date_r=$_REQUEST["date_r"];
$tel=$_REQUEST["tel"];

$sql = "insert students(fam,name,otch,date_r,tel,city_id,group_id) 
        values ('$lname','$fname','$otch','$date_r','$tel',1,1)";
if(!mysqli_query($db_handler, $sql)) {
        header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
        header('Content-Type: text/html; charset=utf-8');
        echo "Ошибка добавления студента: ".mysqli_error($db_handler);
}
// echo "<h1>Выполнено!</h1>";
$sql = "SELECT id, concat(fam, ' ', name, ' ', otch) as name FROM students ORDER BY name";
$result = mysqli_query($db_handler,$sql) or die ("Невозможно выполнить SQL запрос в 'get-student.php'!".mysqli_error($db_handler));

$response ='<table>';
while($row = mysqli_fetch_array($result)) {
    $response .= '<tr>';
    $response .= '<td>'.$row['id'].'</td><td>'.$row['name'].'</td>';
}
$response .= '</table>';

echo $response;
?>