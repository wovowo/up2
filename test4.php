<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.0.js"></script>
    <script>
$(function(){
    $("#enter").click(function () { 
        // let fname=$("#fn").val();
        // let otch=$("#ot").val();
        // let lname=$("#ln").val();
        // let date_r=$("#dt").val();
        // let tel=$("#tl").val();
        $.ajax({
            type: "POST",
            url: "insert_student.php",
            data: {
                fname: $("#fn").val(),
                otch: $("#ot").val(),
                lname: $("#ln").val(),
                date_r: $("#dt").val(),
                tel: $("#tl").val()
            },
            success: function (response) {
                alert("Выполнено!");
            },
            error: function (response) {
                alert("Ошибка!"+" " + response.status + " " + response.statusText);
            }
        });
    });
});
</script>

</head>
<body>

<div>
    <h1>НЕ Форма ввода</h1>
    <!-- <form action="insert_student.php" method="POST"> -->
        <label for="fname">First name:</label>
        <input id="fn" type="text" name="fname"><br><br>
        <label for="otch">Second Name:</label>
        <input id="ot" type="text" name="otch"><br><br>
        <label for="lname">Last name:</label>
        <input id="ln" type="text" name="lname"><br><br>
        <label for="date_r">Date_r:</label>
        <input id="dt" type="date" name="date_r"><br><br>
        <label for="tel">Phone:</label>
        <input id="tl" type="text" name="tel"><br><br>
        <button id="enter">Enter!</button>
        <!-- <input type="submit" value="Submit"> -->
    <!-- </form> -->
</div>


</body>
</html>