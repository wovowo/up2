<?php
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prepods!</title>
    <style>
    .div_st {
        height: 200px;
        width: 200px;
        background: #ffd9d9;
    }
    
    </style>
</head>
<body> 
    <div class="div_st" onclick="alert('click!')">
    <ul>
        <li>Try</li>
        <li>To</li>
        <li>Click!</li>
    </ul>
    </div>
    <img src="space.jpg" width="500" height="600">
    <h4>prepods!<select><option value="2">Гайструк Юрий Николаевич</option><option value="3">Плотникова Татьяна Ивановна</option><option value="1">Фёдорова Катерина Александровна</option></select>
</h4></body>
    <h2>Get prepod</h2>
    <style>
    .div_st {
        background: #f5bbbf;
    }
    </style>
    <div class = "div_st" onclick = "alert('click!')">
    <ul>
        <li>Try</li>
        <li>To</li>
        <li>Click!</li>
    </ul>
    </div>
    <img src="space.jpg" width="500" height="600">
    <?php
        echo "<h4>prepods!</h>";
    $sql = "SELECT id, concat(fam, ' ', name, ' ', otch) as name FROM prepod ORDER BY name";
    $result = mysqli_query($db_handler,$sql) or die ("Невозможно выполнить SQL запрос в 'get-prepod.php'!".mysqli_error($db_handler));
    
    $response ='<select>';
    while($row = mysqli_fetch_array($result)) {
        $response .= '<option value="'.$row['id'].'">'.$row['name'].'</option>';
    }
    $response .= '</select>';
    
    echo $response;
    mysqli_close($db_handler);  
    ?>
</body>
</html>