<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function finddate(){
return date('l');
}
$date = finddate();
$upperCase = strtoupper($date);
$len = strlen($date);
echo "today is $upperCase . and the length is $len";

 ?>
</body>
</html>