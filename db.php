<?php
$name = $_POST["name"]; 
$email = $_POST["email"];
$text_message = $_POST["comment"];
$db=mysql_connect("localhost", "root","","praktika"); 
mysql_select_db("praktika", $db);
$sql = "INSERT INTO table1 (name, email, comment) VALUES ('$name','$email','$text_message')";
$result=mysql_query($sql) or die("Ошибка в запросе!".mysql_error());
header("Location: " . $_SERVER["HTTP_REFERER"]);
exit;
?>