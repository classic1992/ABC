<?php
//echo "read readme<br/>";
//echo readfile("readme");
?>

<?php
$myfile = @fopen("readme","r") or die("file not found");
//$length = (int)filesize("readme")."<br/>";
//echo fread($myfile,filesize("readme"))."<br/>";
while(!feof($myfile)){
    echo fgets($myfile)."<br/>";
}
fclose($myfile);
echo pathinfo("readme");
?>
