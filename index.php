<?php
include_once "data.php";
if ($_SERVER["REQUEST_METHOD"])
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table style="border: solid 1px; background-color: pink">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
    </tr>
    <?php foreach($student as $key => $value):?>
        <tr>
            <td><?php echo $value["name"] ?></td>
            <td><?php echo $value["age"] ?></td>
            <td><?php echo $value["address"] ?></td>
        </tr>
    <?php endforeach;?>
</table>
</body>
</html>
