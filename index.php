<?php
echo
"<style type=\"text/css\">
.color
{
    color:rgba(" . $_POST['R'] . "," . $_POST['G'] . "," . $_POST['B'] . ");
}
</style>";
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
    <form method="POST" action="index.php">
        R<input type="text" name="R"><br>
        G<input type="text" name="G"><br> 
        B<input type="text" name="B"><br>
        <input type="submit">
    </form>
    <span class="color">
        <h1>ЦВЕТ</h1>
    </span>
</body>

</html>