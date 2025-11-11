<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=-+, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>PHP error reporting Example</h1>
    <?php
    //1.Warning
    echo "<h2>1.Warning : Lets's see </h2>";
    include ' non_existent_file.php';
   // 2.Notice : Undefined variable
   echo "<h2>2.Notice : Lets's see </h2>"; //This will generate error
   $a="undefined_variable";
   echo $b;
</body>
</html>