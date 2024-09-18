<?php

echo"hello world";

$host = "localhost";
$user = "root";
$password = "";
$dbname = "lepitendb";
$table_name = "students_table";

$db = "mysql:host=$host;dbname=$dbname";

$conn = new PDO($db,$user,$password);
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$first_name = "hello3";
$last_name = "world3";
$age = "20";
$gender = "female";

$stmt = $connection->query("SELECT * FROM students_table");
while($row = $stmt->fetch()){
    echo $row['id']."-".$row['first_name']."".
    $row["last_name"]."<br>";
}
