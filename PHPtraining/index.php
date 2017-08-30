<?php
$peoples = array("clssic", "sumudu", "seneth", "gayan", "rajitha");
echo "<ol>";
foreach ($peoples as $person){
    echo"<li>$person</li>";
}
echo "</ol>";


echo"<table border='1'>";
echo "<caption>Peoples</caption>";
echo "<tr>";
echo "<td>Index</td>";
echo "<td>Name</td>";
echo "</tr>";
foreach ($peoples as $num => $person){
        echo"<tr>";
        echo "<td width='50px' style='text-align: center'>".($num + 1)."</td>";
        echo "<td width='100px'  style='text-align: center'>$person</td>";
}
echo "</table>";
?>