<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST1</title>
<style>
    
.div_st {
    height: 200px;
    width: 200px;
    background: #6b6bc5;
    } 

table {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 14px;
border-collapse: collapse;
text-align: center;
}
th, td:first-child {
background: #AFCDE7;
color: white;
padding: 10px 20px;
}
th, td {
border-style: solid;
border-width: 0 1px 1px 0;
border-color: white;
}
td {
background: #D8E6F3;
}
th:first-child, td:first-child {
text-align: left;
}
</style>
</head>
<body>
    <h1 style=" margin: 20px;
                background: #d3b2b2;
                font-style: italic;">
        Заголовок</h1>
    <h4>This is heading 4</h4>
    <div class="div_st" onclick="alert('Hello World!')">

    <ul style="line-height:180%">
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ul>
    </div>
<?php
echo "<h4>Студенты!</h4>";
$sql = "SELECT id, concat(fam, ' ', name, ' ', otch) as name FROM students ORDER BY fam";
$result = mysqli_query($db_handler,$sql) or die ("Невозможно выполнить SQL запрос!".mysqli_error($db_handler));

$response ='<table>';
while($row = mysqli_fetch_array($result)) {
    $response .= '<tr>';
    $response .= '<td>'.$row['id'].'</td><td>'.$row['name'].'</td>';
    $response .= '</tr>';
}
$response .= '</table>';

echo $response;
mysqli_close($db_handler);
?>


</body>
</html>
<!-- <script>
    alert("After ALL");
</script> -->