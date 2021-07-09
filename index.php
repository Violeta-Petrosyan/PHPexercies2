<?php
$arr = [];
for ($i = 0; $i < 25; $i++) {
    $arr[$i] = rand(1, 100);
}
$arr = array_unique($arr);
arsort($arr);
$arr = array_values($arr);
?>

<!<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>RandomNumbers</title>
    <style>
        table {
            border-collapse: collapse;
        }
        tr, td {
            border: 1px solid;
            width: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
<table style = "border: 1px solid">
    <?php foreach ($arr as $key => $value): ?>
        <tr>
            <td><?= ++$key; ?></td>
            <td><?= $value; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>




