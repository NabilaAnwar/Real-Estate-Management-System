<html>
<form action="" method="post">
<label> Name: <br><input type="text" name="name"></label><br></br>
<label> Message: <br><textarea cols="45" rows="5" name="mes"></textarea></label><br><br>
<input type="submit" name="post" value="Post">
</form>
</html>

<?php

$name=$_POST["name"];
$text=$_POST["mes"];
$post=$_POST["post"];

if($post){
	#write down comments#

	$write=fopen("com.txt","a+");
	fwrite($write, "<u><b> $name</b></u><br>$text<br>");
	fclose($write);

	#display comments#

	$read=fopen("com.txt","r+t");
	echo "All comments:<br>";

	while (!feof($read)) {
		echo fread($read,1024);
	}
	fclose($read);
}
else{
	$read=fopen("com.txt","r+t");
	echo "All comments:<br>";

	while (!feof($read)) {
		echo fread($read,1024);
	}
	fclose($read);
}
?>