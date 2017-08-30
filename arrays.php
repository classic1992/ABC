<?php
//$array = array("Name"=> "classic");
//print_r($array);
//printf("<br/>");
//print_r(array_change_key_case($array));
//printf("<br/>");
//print_r(array_change_key_case($array,1));

$array = array(1,3,5, "h");
echo array_product($array);
echo nl2br("hello\n come\n again");
$greet = "hello welcome";
var_dump($greet);
$greetnew = chunk_split(($greet));
var_dump($greetnew);
print_r(count_chars($greet,1));
?>