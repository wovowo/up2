<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.0.js"></script>
    <style>
        .myclass {
            background: #b69a9a
        }
    </style>
</head>
<body>
<script>
$(document).ready(function(){
  $("#p1").click(function(){
    $(this).css("background", "pink").fadeOut(2000).fadeIn(1000);
  });
  $(".myclass").click(function(){
    $(this).css("background", "yellow").fadeOut(2000).fadeIn(1000);
  });
});
</script>
<p id="p1">
    aaa
    bbb
    ccc
</p>

<p class="myclass" id="p2">
    ddd
    eee
    fff
</p>
<div class="myclass" style="height: 200px; width: 200px"> </div>
</body>
</html>