<?php
$conn = new mysqli("localhost","root","","shop");

$result = $conn->query("SELECT * FROM cart");

echo "<h1>Your Cart</h1>";

while($row = $result->fetch_assoc()){
echo $row['name']." - $".$row['price']."<br>";
}
?>