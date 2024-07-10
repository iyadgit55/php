HTML Code
<html>
<body>
<form action="String.php" method="get">
Enter a String	:<input type="text" name="str">
<input type="submit" value="Display">
</form>
</body>
</html>
PHP Code
<?php
echo "The entered String is: ",$_GET['str'];
?>
