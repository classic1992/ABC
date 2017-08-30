<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();
?>
<a href="index2.php">go to the second page again</a>
</body>
</html>