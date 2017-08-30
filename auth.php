<?php
if($_SERVER['PHP_AUTH_USER']!=='admin' && $_SERVER['PHP_AUTH_PW']!=='admin' ){
    header("WWW-Authenticate: Basic realm=\"PHPproject\"");
    header("HTTP\ 1.0 401 Unauthorized");
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>hello world</p>
</body>
</html>