<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="form.php" method="post">
    <input title="name" type="text" name="name"/>
    <input title="email" type="email" name="email"/>
    <input title="phone" type="number" name="phone"/>
    <input type="submit"/>
</form>
<?php
$post = $_POST;
   echo $ser = serialize($post);
?>
</body>
</html>
