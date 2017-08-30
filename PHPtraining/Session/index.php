<?php
session_start();

$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables

echo "Session variables are set.";
?>
<a href="index2.php">go to the second page</a>
</body>
</html>
