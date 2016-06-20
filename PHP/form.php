<form action="form.php" method="get">
    <input type="text" name="name"/>
    <input type="text" name="email"/>
    <input type="text" name="phone"/>
    <input type="submit"/>
</form>
<?php
print_r($_GET);
?>
