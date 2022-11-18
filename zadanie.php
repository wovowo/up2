<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABC</title>
    <script src="js/jquery-3.6.0.js"></script>
    <style>
        .myclass {
            background: #b69a9a; width: 200px; height: 200px;
        }
    </style>
<script>
        $(document).ready(function(){
  $("#d1").mouseenter(function(){
$("#d1").offset({top:200,left:200});
  });
});
</script>
<div id="d1" class="myclass"></div>
</head>
<body>
    
</body>
</html>