<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.0.js"></script>
<style>
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
                // alert("Выполнено!");
                $("#out p").html(response);
            },
            error: function (response) {
                alert("Ошибка!"+" " + response.status + " " + response.responseText);
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
<div id="out">
    <p></p>
</div>

</body>
</html>
<script>
function del_st(id) {
    $.ajax({
            type: "POST",
            url: "delete_student.php",
            data: {
                ids: id
            },
            success: function (response) {
               alert("Выполнено!");

            },
            error: function (response) {
                alert("Ошибка!"+" " + response.status + " " + response.responseText);
            }
        });
} 
</script>