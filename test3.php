<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <h1>Форма ввода</h1>
    <form action="insert_student.php" method="GET"> 
        <label for="lname">Фамилия:</label>
        <input type="text" id="lname" name="lname"><br><br>
        <label for="fname">Имя:</label>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="otch">Отчество:</label>
        <input type="text" id="otch" name="otch"><br><br>
        <label for="pass">Пароль:</label>
        <input type="password" name="pass"><br><br>
        <label for="date_r">Дата рождения</label>
        <input type="date" name="date_r"><br><br>
        <label for="tel">Телефон</label>
        <input type="number" name="tel"><br><br>
        <input type="submit" value="Submit">
</form>
</div>

</body>
</html>