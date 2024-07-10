<!DOCTYPE html>
<html>
<body>
    <form action="display_string.php" method="get">
        Enter a String: <input type="text" name="str"><br>
        <input type="submit" value="Display">
    </form>
</body>
</html>
<?php
if (isset($_GET['str'])) {
    $enteredString = htmlspecialchars($_GET['str']);
    echo "The entered string is: " . $enteredString;
} else {
    echo "No string entered.";
}
?>
