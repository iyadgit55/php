<html>
<body>
<form action="GetDemo.php" method="get">
Name	:<input type="text" name="name"><br>
E-Mail	:<input type="text" name="email"><br>
<input type="submit">
</form>
</body>
</html>
PHP File
<?php
echo "Hi ",$_GET['name'], "<br>";
echo "Your email address is:" , $_GET['email']; 
?>
