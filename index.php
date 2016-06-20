<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $id = 1;
?>
<?php
    $name = 'Andy';
    $email = 'andy@gmail.com';
    $age = 22;
?>
    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
        </tr>
        <tr>
            <td><?=$id;?></td>
            <td><?=$name;?></td>
            <td><?=$email;?></td>
            <td><?=$age;?></td>
        </tr>
    </table>
</body>
</html>