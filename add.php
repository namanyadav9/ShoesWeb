<?php
$conn = new mysqli("localhost","root","","shop");

$name = $_GET["name"];
$price = $_GET["price"];

$conn->query("INSERT INTO cart VALUES('$name','$price')");

header("Location: index.html");
exit();
?>