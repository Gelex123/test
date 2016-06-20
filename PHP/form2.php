<form action="form2.php" method="get">
    <input type="text" name="username"/>
    <input type="text" name="email"/>
    <input type="text" name="message"/>
    <input type="submit"/>
</form>
<?php
print_r($_GET);
echo '<br>';
echo $forms = serialize($_GET);
?>