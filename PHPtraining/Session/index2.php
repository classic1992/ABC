<?php
session_start();


?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
if(isset($_SESSION["favcolor"]))
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
if(isset($_SESSION["favanimal"]))
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br/>";
print_r($_SESSION);
?>

<?php
echo"<br/> today is ".date("Y/m/d");
echo "<br/> today is ". date("y.m.d");
echo "<br/> today is ". date("y-m-d"). "and the day is".date("l");
date_default_timezone_set("England");
echo "<br/> time is ". date("H:i:s a")
?>
<br/><a href="index3.php">go to the third page</a>
</body>
</html>