<?php
$name = "classic";
$names = array("classic", "seneth", "sumudu");
$brothers = array("big"=>"seneth", "medium"=>"sumudu","little"=>"classic");
print_r($names);
echo"<br><br>";
print_r($brothers);
echo"<br><br>";
print_r(sort($names));
echo"<br><br>";
$cricketers = array("kumar","mahela","sanath","arjuna","mavan");
$singers = array("kumar","gayan","mavan","janaka","subash");
print_r(array_diff($cricketers,$singers));
echo"<br><br>";
print_r(array_intersect($cricketers,$singers));
echo"<br><br>";
print_r(array_combine($cricketers,$singers));
echo"<br><br>";
print_r(array_flip($brothers));
echo"<br><br>";
print_r($brothers);
echo"<br><br>";
print_r(array_reverse($brothers));
?>

