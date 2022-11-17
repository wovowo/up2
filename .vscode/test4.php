<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cubes</title>
    <script src="js/jquery-3.6.0.js"></script>
    <style>
        .myred {
            background: "red"
        }
        .myblue {
            background: "blue"
        }
    </style>
</head>
<body>
<script>
$(document).ready(function(){
  $(".myred").click(function(){
    $(this).css("background", "red").fadeOut(2000).fadeIn(1000);
  });
  $(".myblue").click(function(){
    $(this).css("background", "blue").fadeOut(2000).fadeIn(1000);
  });
});
</script>
<p class="myred" id="p1">
    aaa
    bbb
    ccc
</p>

<p class="myblue" id="p2">
    ddd
    eee
    fff
</p>
<div class="myred" style="height: 200px; width: 200px"> </div>
<div class="myblue" style="height: 200px; width: 200px"></div>
</body>
</html>